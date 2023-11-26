<template>
    <div>
        <section class="blue">
            <div class="container py-4">
                <h1 class="h1 text-center" id="pageHeaderTitle">Saluden a ...</h1>

                <article class="postcard green blue">
                    <a class="postcard__img_link" href="#">
                        <img class="postcard__img" src="https://rafalopez.ar/img/img_mascotas/gato.jpg" alt="Image Title" />
                    </a>
                    <div class="postcard__text">
                        <h1 class="postcard__title blue"><a href="#">Nombre del animal</a></h1>
                        <div class="postcard__subtitle small">
                            <time datetime="2020-05-25 12:00:00">
                                <i class="fas fa-calendar-alt mr-2"></i>Fecha de nacimiento
                            </time>
                        </div>
                        <div class="postcard__bar"></div>
                        <div class="postcard__preview-txt">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            Eligendi, fugiat asperiores inventore beatae accusamus odit minima enim, commodi quia, doloribus
                            eius! Ducimus nemo accusantium maiores velit corrupti tempora reiciendis molestiae repellat
                            vero. Eveniet ipsam adipisci illo iusto quibusdam, sunt neque nulla unde ipsum dolores nobis
                            enim quidem excepturi, illum quos!</div>
                        <ul class="postcard__tagbox">
                            <li class="tag__item"><i class="fas fa-tag mr-2"></i>Sociable</li>
                            <li class="tag__item"><i class="fas fa-clock mr-2"></i>Desparasitado</li>
                            <li class="tag__item play blue">
                                <a href="#"><i class="fas fa-play mr-2"></i>Le gustan los niños</a>
                            </li>
                            <button type="button" class="btn btn-primary btn-lg">Lo quiero!</button>
                        </ul>
                    </div>
                </article>
            </div>
        </section>
    </div>
</template>

<script>
export default {
    name: 'MascotaProfileComponent',
};
</script>

<style scoped>


/* This pen */
body {
    font-family: "Baloo 2", cursive;
    font-size: 16px;
    color: #030303;
    text-rendering: optimizeLegibility;
    font-weight: initial;
}

.green {
    background: rgb(196, 177, 11);
}


.light {
    background: #f3f5f7;
}

a,
a:hover {
    text-decoration: none;
    transition: color 0.3s ease-in-out;
}

#pageHeaderTitle {
    margin: 2rem 0;
    text-transform: uppercase;
    text-align: center;
    font-size: 2.5rem;
}

/* Cards */
.postcard {
    flex-wrap: wrap;
    display: flex;

    box-shadow: 0 4px 21px -12px rgba(0, 0, 0, 0.66);
    border-radius: 10px;
    margin: 0 0 2rem 0;
    overflow: hidden;
    position: relative;
    color: #0a0a0a;



    a {
        color: inherit;
    }

    h1,
    .h1 {
        margin-bottom: 0.5rem;
        font-weight: 500;
        line-height: 1.2;
    }

    .small {
        font-size: 80%;
    }

    .postcard__title {
        font-size: 1.75rem;
    }

    .postcard__img {
        max-height: 120px;
        width: 100%;
        object-fit: cover;
        position: relative;
    }

    .postcard__img_link {
        display: contents;
    }

    .postcard__bar {
        width: 50px;
        height: 10px;
        margin: 10px 0;
        border-radius: 5px;
        background-color: #a35d5d;
        transition: width 0.2s ease;
    }

    .postcard__text {
        padding: 1.5rem;
        position: relative;
        display: flex;
        flex-direction: column;
    }

    .postcard__preview-txt {
        overflow: hidden;
        text-overflow: ellipsis;
        text-align: justify;
        height: 100%;
    }

    .postcard__tagbox {
        display: flex;
        flex-flow: row wrap;
        font-size: 14px;
        margin: 20px 0 0 0;
        padding: 0;
        justify-content: center;

        .tag__item {
            display: inline-block;
            background: rgba(83, 83, 83, 0.4);
            border-radius: 3px;
            padding: 10px 10px;
            margin: 0 5px 5px 0;
            cursor: default;
            user-select: none;
            transition: background-color 0.3s;
            text-align: center;

            &:hover {
                background: rgba(209, 89, 89, 0.8);
            }
        }
    }

    &:before {
        content: "";
        position: absolute;
        top: 0;
        right: 0;
        bottom: 0;
        left: 0;
        background-image: linear-gradient(-70deg, #424242, transparent 50%);
        opacity: 1;
        border-radius: 10px;
    }

    &:hover .postcard__bar {
        width: 100px;
    }
}

@media screen and (min-width: 769px) {
    .postcard {
        flex-wrap: inherit;

        .postcard__title {
            font-size: 2rem;
        }

        .postcard__tagbox {
            justify-content: start;
        }

        .postcard__img {
            max-width: 300px;
            max-height: 100%;
            transition: transform 0.3s ease;
        }

        .postcard__text {
            padding: 3rem;
            width: 100%;
        }

        .media.postcard__text:before {
            content: "";
            position: absolute;
            display: block;
            background: #18151f;
            top: -20%;
            height: 130%;
            width: 55px;
        }

        &:hover .postcard__img {
            transform: scale(1.1);
        }

        &:nth-child(2n+1) {
            flex-direction: row;
        }

        &:nth-child(2n+0) {
            flex-direction: row-reverse;
        }

        &:nth-child(2n+1) .postcard__text::before {
            left: -12px !important;
            transform: rotate(4deg);
        }

        &:nth-child(2n+0) .postcard__text::before {
            right: -12px !important;
            transform: rotate(-4deg);
        }
    }
}

@media screen and (min-width: 1024px) {
    .postcard__text {
        padding: 2rem 3.5rem;
    }

    .postcard__text:before {
        content: "";
        position: absolute;
        display: block;

        top: -20%;
        height: 130%;
        width: 55px;
    }

    .postcard.green {
        .postcard__text:before {
            background: #18151f;
        }
    }

    .postcard.light {
        .postcard__text:before {
            background: #e1e5ea;
        }
    }
}

/* COLORS */
.postcard .postcard__tagbox .green.play:hover {
    background: $main-green;
    color: black;
}

.green .postcard__title:hover {
    color: $main-green;
}

.green .postcard__bar {
    background-color: $main-green;
}

.green::before {
    background-image: linear-gradient(-30deg,
            $main-green-rgb-015,
            transparent 50%);
}

.green:nth-child(2n)::before {
    background-image: linear-gradient(30deg, $main-green-rgb-015, transparent 50%);
}

.postcard .postcard__tagbox .blue.play:hover {
    background: $main-blue;
}

.blue .postcard__title:hover {
    color: $main-blue;
}

.blue .postcard__bar {
    background-color: $main-blue;
}

.blue::before {
    background-image: linear-gradient(-30deg, $main-blue-rgb-015, transparent 50%);
}

.blue:nth-child(2n)::before {
    background-image: linear-gradient(30deg, $main-blue-rgb-015, transparent 50%);
}

.postcard .postcard__tagbox .play:hover {
    background: $main-red;
}

.postcard__title:hover {
    color: $main-red;
}

.postcard__bar {
    background-color: $main-red;
}




.postcard .postcard__tagbox .play:hover {
    background: $main-yellow;
    color: black;
}

.yellow .postcard__title:hover {
    color: $main-yellow;
}

.yellow .postcard__bar {
    background-color: $main-yellow;
}

.yellow::before {
    background-image: linear-gradient(-30deg,
            $main-yellow-rgb-015,
            transparent 50%);
}

@media screen and (min-width: 769px) {
    .green::before {
        background-image: linear-gradient(-80deg,
                $main-green-rgb-015,
                transparent 50%);
    }

    .green:nth-child(2n)::before {
        background-image: linear-gradient(80deg,
                $main-green-rgb-015,
                transparent 50%);
    }

    .blue::before {
        background-image: linear-gradient(-80deg,
                $main-blue-rgb-015,
                transparent 50%);
    }

    .blue:nth-child(2n)::before {
        background-image: linear-gradient(80deg, $main-blue-rgb-015, transparent 50%);
    }

button {
    margin-left: 150px;
}

}</style>