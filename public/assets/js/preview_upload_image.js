document.getElementById("file").addEventListener("change", (e) => {
    const file = e.target.files[0];
    // console.log(document.getElementById("previewPhoto").src);
    document.getElementById("previewPhoto").src = URL.createObjectURL(file);
});
