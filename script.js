// Función para mostrar u ocultar el párrafo correspondiente
function toggleParagraph(paragraphId) {
  var paragraph = document.getElementById(paragraphId);
  if (paragraph.style.display === "none") {
    paragraph.style.display = "block";
  } else {
    paragraph.style.display = "none";
  }
}

let videoVisible = false;


function toggleVideo() {
  const videoContainer = document.getElementById("videoContainer");
  if (videoVisible) {
    videoContainer.innerHTML = ""; // Oculta el video
  } else {
    videoContainer.innerHTML = `
        <iframe width="350" height="200" src="https://www.youtube.com/embed/EnIokkbp2ds" title="Mt 6, 7-15 - Evangelio del día - Padre Luis Zazano" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
      `; // Muestra el video
  }
  videoVisible = !videoVisible;
}

function toggleVideo1() {
    const videoContainer = document.getElementById("videoContainer1");
    if (videoVisible) {
      videoContainer1.innerHTML = ""; // Oculta el video
    } else {
      videoContainer1.innerHTML = `
          <iframe width="350" height="200" src="https://www.youtube.com/embed/SFAndV27z6s?list=PLo_yVjcAzZ-K8y7PuhSSbIjhf-w8RPHKT" title="Palabra de Vida 20/6/2024: «Vosotros orad así» / Por P. Jesús Higueras" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
        `; // Muestra el video
    }
    videoVisible = !videoVisible;
  }


  function toggleVideo2() {
    const videoContainer = document.getElementById("videoContainer2");
    if (videoVisible) {
      videoContainer2.innerHTML = ""; // Oculta el video
    } else {
      videoContainer2.innerHTML = `
          <video controls autoplay>
            <source src="tu_video.mp4" type="video/mp4">
          </video>
        `; // Muestra el video
    }
    videoVisible = !videoVisible;
  }

 



  




