const video = document.getElementById('video');
const canvas = document.getElementById('canvas');
const captureBtn = document.getElementById('capture-btn');
const context = canvas.getContext('2d');

// Access the camera
navigator.mediaDevices.getUserMedia({ video: true })
.then(stream => {
video.srcObject = stream;
})
.catch(err => {
console.error('Error accessing the camera:', err);
});

// Capture image from the camera
captureBtn.addEventListener('click', () => {
context.drawImage(video, 0, 0, canvas.width, canvas.height);
const imageData = canvas.toDataURL('image/png');

// Send captured image data to PHP script
const xhr = new XMLHttpRequest();
xhr.open('POST', 'save_image.php');
xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
xhr.onload = function() {
if (xhr.status === 200) {
console.log('Image saved successfully.');
} else {
console.error('Failed to save image.');
}
};
xhr.send('image=' + encodeURIComponent(imageData));
});