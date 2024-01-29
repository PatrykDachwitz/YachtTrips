export function updateTimestampUrl(url) {
    if (url.includes('?')) {
        if (url.includes('ts=')) {
            return url.replace('ts=', 'ts=1')
        } else {
            return `${url}&ts=1`;
        }
    } else {
        return `${url}?ts=1`;
    }
}
