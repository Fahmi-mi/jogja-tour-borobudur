document.addEventListener("DOMContentLoaded", () => {
  const setupVideo = (containerId, iframeId, youtubeId) => {
    const container = document.getElementById(containerId);
    const iframe = document.getElementById(iframeId);

    if (!container || !iframe) {
      return;
    }

    container.addEventListener("click", () => {
      iframe.src = `https://www.youtube.com/embed/${youtubeId}?si=aqwLUn_XLc1_ZuiF&autoplay=1`;
      iframe.classList.remove("hidden");
      container.classList.add("hidden");
    });
  };

  setupVideo("video1Container", "iframe1", "1V_4-f5Ocy4");
  setupVideo("video2Container", "iframe2", "lIZeZMbUG6s");
});
