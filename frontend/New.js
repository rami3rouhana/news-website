export const New = (article) =>{
    return(`
    <div class="col" id="${article.id}">
    <div class="card">
      <img src="${article.image}" class="card-img-top" alt="...">
      <div class="card-body">
        <span style="display:none">${article.url}</span>
        <h5 class="card-title">${article.title}</h5>
        <p class="card-text">${article.description}</p>
      </div>
    </div>
  </div>
    `)
}