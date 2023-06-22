const searchBar = document.querySelector(".users .search input "),
  searchBtn = document.querySelector(".users .search button");

/* when you click magnifying glass icon,
 the color will be modified and search bar will be dumped up.  */
searchBtn.onclick = () => {
  searchBar.classList.toggle("active");
  searchBar.focus();
  searchBtn.classList.toggle("active");
};
