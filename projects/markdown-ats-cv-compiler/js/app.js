document.addEventListener("DOMContentLoaded", () => {
    const fileInput = document.getElementById('md-upload');
    const previewContainer = document.getElementById('resume-preview');
    const printButton = document.getElementById('print-btn');

    // Establish marked.js parsing features to emit structured token pairs
    marked.setOptions({
        breaks: true,
        gfm: true
    });

    fileInput.addEventListener('change', (event) => {
        const file = event.target.files[0];
        if (!file) return;

        const reader = new FileReader();

        reader.onload = (e) => {
            const markdownText = e.target.result;

            // Remove manual hyphens/breaks so custom CSS horizontal rules map nicely
            const clearedText = markdownText.replace(/^-{3,}/gm, '');
            
            // Build raw markdown tokens straight into structured inner layout trees
            const htmlContent = marked.parse(clearedText);
            
            // Remove the modern application shell styles from the preview container to inject true text flow
            previewContainer.removeAttribute('class');
            previewContainer.className = "bg-white mx-auto shadow-xl border border-slate-200 rounded-xl p-[20mm] transition-all duration-300 max-w-[210mm] min-h-[297mm] ats-flow";
            
            // Render the inner text block
            previewContainer.innerHTML = htmlContent;
            printButton.disabled = false;
            
            // Re-map document meta-title directly to enforce programmatic output filenames on save
            const cleanFileName = file.name.replace(/\.[^/.]+$/, "");
            document.title = `${cleanFileName}_ATS_Compiled`;
        };

        reader.onerror = () => {
            previewContainer.innerHTML = `
                <div class="bg-red-50 border border-red-200 text-red-700 p-5 rounded-lg font-sans shadow-sm max-w-2xl mx-auto my-12">
                    <div class="flex gap-3">
                        <svg class="w-5 h-5 text-red-500 shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                        <div>
                            <p class="font-bold text-sm text-red-800 mb-1">Execution Failure</p>
                            <p class="text-sm">The browser was unable to process this document data binary. Ensure the file permissions are readable.</p>
                        </div>
                    </div>
                </div>
            `;
        };

        reader.readAsText(file);
    });
});
