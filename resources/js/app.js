//
const albumes = [
    {
        id: 1,
        titulo: "Thriller",
        artista: "Michael Jackson",
        genero: "Pop",
        anio: 1982,
        portada: "https://placehold.co/300x300/181818/ffffff?text=Thriller"
    },
    {
        id: 2,
        titulo: "Back in Black",
        artista: "AC/DC",
        genero: "Rock",
        anio: 1980,
        portada: "https://placehold.co/300x300/181818/ffffff?text=Back+in+Black"
    },
    {
        id: 3,
        titulo: "The Eminem Show",
        artista: "Eminem",
        genero: "Rap",
        anio: 2002,
        portada: "https://placehold.co/300x300/181818/ffffff?text=Eminem+Show"
    },
    {
        id: 4,
        titulo: "Future Nostalgia",
        artista: "Dua Lipa",
        genero: "Pop",
        anio: 2020,
        portada: "https://placehold.co/300x300/181818/ffffff?text=Future+Nostalgia"
    },
    {
        id: 5,
        titulo: "Random Access Memories",
        artista: "Daft Punk",
        genero: "Electrónica",
        anio: 2013,
        portada: "https://placehold.co/300x300/181818/ffffff?text=Random+Access+Memories"
    },
    {
        id: 6,
        titulo: "Un Verano Sin Ti",
        artista: "Bad Bunny",
        genero: "Reguetón",
        anio: 2022,
        portada: "https://placehold.co/300x300/181818/ffffff?text=Un+Verano+Sin+Ti"
    }
];


const albunGrid = document.getElementById('album-grid')

albumes.forEach((album)  => {
const albunCard = document.createElement('article')
albunCard.classList.add('album-card')
albunGrid.appendChild(albunCard)

const cover = document.createElement('div')
cover.classList.add('cover', 'cover-one')
albunCard.appendChild(cover)

const img = Object.assign(document.createElement('img'), {
  src: album.portada,
  alt: album.titulo,
  title: album.titulo,
})
cover.appendChild(img)

const span = document.createElement('span')
span.textContent = "Destacado";
span.classList.add('cover-tag')
cover.appendChild(span)


const button = Object.assign(document.createElement('button'), {
    className: 'play-button',
    type: 'button',
    textContent: "▶",
})

cover.appendChild(button)

const albumInfo = document.createElement('div')
albumInfo.classList.add('album-info')
albunCard.appendChild(albumInfo)

const div = document.createElement('div')
albumInfo.appendChild(div)

const albumTitle = document.createElement('h3')
albumTitle.textContent = album.titulo
div.appendChild(albumTitle)

const albumArtist = document.createElement('p')
albumArtist.textContent = album.artista
div.appendChild(albumArtist)

const buttonInfo = Object.assign(document.createElement('button'), {
    className: 'heart-button',
    type: 'button',
    textContent: '♡'
})

albumInfo.appendChild(buttonInfo)

const spanAlbum  = document.createElement('span')
spanAlbum.classList.add('album-meta')
spanAlbum.textContent = `${album.anio} - ${album.genero}`
albunCard.appendChild(spanAlbum)
})

const buttonGeneres = document.querySelectorAll('.genre')
buttonGeneres.forEach((buttonGenere) => {
    buttonGenere.addEventListener('click', (e) =>  {
    const elementoPulsado = e.target;

    const filterGender = albumes.filter((album) => {
        if(elementoPulsado.textContent === album.genero) {
            return album.genero
        }
    })
    console.log(filterGender)
    })
})

