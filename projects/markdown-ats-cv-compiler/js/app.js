document.addEventListener("DOMContentLoaded", () => {
    // Enforce strict relative path targeting from the site root
    const inputPath = './data/input/resume.md';
    const previewContainer = document.getElementById('resume-preview');

    // Configure the markdown parser to emit strict semantic elements
    marked.setOptions({
        breaks: true,
        gfm: true
    });

    /**
     * Appends a dynamic timestamp parameter to the file URL.
     * This destroys aggressive browser caching, forcing GitHub Pages
     * to immediately serve your latest git commit updates.
     */
    const cacheBustingUrl = `${inputPath}?t=${new Date().getTime()}`;

    // Fetch the target resource dynamically
    fetch(cacheBustingUrl)
        .then(response => {
            if (!response.ok) {
                throw new Error(`Could not find your file at ${inputPath}. Verify it is committed to your repository layout.`);
            }
            return response.text();
        })
        .then(markdownText => {
            // Pre-process and strip manual divider lines so CSS borders handle section scaling cleanly
            const clearedText = markdownText.replace(/^-{3,}/gm, '');
            
            // Transform raw markup into semantic web tokens
            const htmlContent = marked.parse(clearedText);
            
            // Render UI
            previewContainer.innerHTML = htmlContent;
        })
        .catch(error => {
            console.error(error);
            previewContainer.innerHTML = `
                <div style="color: #d9383a; background-color: #fce8e6; padding: 20px; border-radius: 6px; font-family: sans-serif;">
                    <p style="margin: 0 0 8px 0; font-weight: bold;">Compilation Error:</p>
                    <p style="margin: 0; font-size: 0.9em;">${error.message}</p>
                </div>
            `;
        });
});
