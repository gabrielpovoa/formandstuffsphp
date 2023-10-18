let button = document.getElementById("readMore");
let image = document.querySelector('.img');
let heading = document.querySelector('.heading');

let animais = [
    { id: 1, name: 'Horse Horsed', img: 'https://www.thesprucepets.com/thmb/WCHi1vABy_vfH6kDo7snIluUzyo=/2109x0/filters:no_upscale():strip_icc()/GettyImages-909948608-5c69cd9446e0fb0001560d1a.jpg' },
    { id: 2, name: 'кабан Кабанов', img: 'https://upload.wikimedia.org/wikipedia/commons/3/3d/Ausgewachsenes_Wildschwein_beim_Suhlen.JPG' },
    { id: 3, name: 'курица Куриченко', img: 'https://cdnn11.img.sputnik.by/img/07e5/09/0f/1056483655_674:0:1920:1246_1920x0_80_0_0_6505acc51abb3dc6b1f006225a69f469.jpg' },
    { id: 4, name: 'Слон Слоновский', img: 'https://upload.wikimedia.org/wikipedia/commons/3/35/Elephasantiquus.jpg' },
    { id: 5, name: 'Медведь Мед', img: 'https://www.m24.ru/b/d/nBkSUhL2hFMgmc-1Jr6BvMKnxdDs95C-yyqYy7jLs2KQeXqLBmmcmzZh59JUtRPBsdaJqSfJd54qEr7t1mNwKSGK7WY=H0LkIvUogtOtP93m3waZWg.jpg' },
    { id: 6, name: 'Лиса Лисичкин', img: 'https://static.mk.ru/upload/entities/2022/11/10/15/articles/detailPicture/36/64/2f/3d/422f5c06bdb1f1c26d7ce27e002d9303.jpg' },
    { id: 7, name: 'Кошка Кошкин', img: 'https://s0.rbk.ru/v6_top_pics/media/img/4/97/756723916815974.webp' },
    { id: 8, name: 'Собака Собачев', img: 'https://cdn.iz.ru/sites/default/files/styles/900x506/public/news-2023-08/c09.jpg?itok=1j7nJLux' }
]
let currentIndex = 0;

button.addEventListener('click', () => {
    if (currentIndex < animais.length) {
        const item = animais[currentIndex];
        image.setAttribute('src', item.img);
        heading.innerHTML = item.name;
        currentIndex++;
    }
});
