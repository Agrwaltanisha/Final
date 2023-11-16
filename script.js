const canvas = document.getElementById('canvas');
const ctx = canvas.getContext('2d');
let isDrawing = false;

canvas.addEventListener('mousedown', (event) => {
    isDrawing = true;
    ctx.beginPath();
    ctx.moveTo(event.clientX - canvas.getBoundingClientRect().left, event.clientY - canvas.getBoundingClientRect().top);
});

canvas.addEventListener('mousemove', (event) => {
    if (!isDrawing) return;

    ctx.lineTo(event.clientX - canvas.getBoundingClientRect().left, event.clientY - canvas.getBoundingClientRect().top);
    ctx.stroke();
});

canvas.addEventListener('mouseup', () => {
    isDrawing = false;
    ctx.closePath();
});

canvas.addEventListener('mouseleave', () => {
    isDrawing = false;
    ctx.closePath();
});
