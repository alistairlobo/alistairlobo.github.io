import urllib.request
import urllib.parse
import urllib.error

def make_get_request(url):
    try:
        response = urllib.request.urlopen(url)
        return response.read()
    except urllib.error.URLError as e:
        print(f"Error making GET request: {e.reason}")
        return None

def make_post_request(url, data):
    try:
        data = urllib.parse.urlencode(data).encode('utf-8')
        request = urllib.request.Request(url, data)
        response = urllib.request.urlopen(request)
        return response.read()
    except urllib.error.URLError as e:
        print(f"Error making POST request: {e.reason}")
        return None

def main():
    # Example GET request with loop
    get_url = 'https://www.example.com/api/data'
    for _ in range(3):  # Retry 3 times if there's an error
        get_response = make_get_request(get_url)
        if get_response:
            print(f"GET Response: {get_response.decode('utf-8')}")
            break
        else:
            print("Retrying GET request...")

    # Example POST request with loop
    post_url = 'https://www.example.com/api/post'
    post_data = {'key': 'value', 'another_key': 'another_value'}
    for _ in range(3):  # Retry 3 times if there's an error
        post_response = make_post_request(post_url, post_data)
        if post_response:
            print(f"POST Response: {post_response.decode('utf-8')}")
            break
        else:
            print("Retrying POST request...")

if __name__ == "__main__":
    main()
