<template>
    <!-- Slider -->
    <section id="home" class="slider ripple">
        <div id="particles-js"></div>
        <div class="container">
            <div class="s-wrap">
                <div class="slider-wrap">
                    <span>Hello</span>
                    <h1>Pramod <b>Kharel</b></h1>
                    <p>I am a Singer</p>
                </div>
                <div class="slide-img">
                    <div
                        id="carouselExampleFade"
                        class="carousel slide"
                        data-bs-ride="carousel"
                    >
                        <div class="carousel-inner">
                            <div
                                class="carousel-item active"
                                data-bs-interval="3000"
                                data-pause="true"
                            >
                                <img src="img/slide1.png" alt="slider" />
                            </div>
                            <div
                                class="carousel-item"
                                data-bs-interval="3000"
                                data-pause="true"
                            >
                                <img src="img/slide2.png" alt="slider" />
                            </div>
                            <div
                                class="carousel-item"
                                data-bs-interval="3000"
                                data-pause="true"
                            >
                                <img src="img/slide3.png" alt="slider" />
                            </div>
                        </div>
                        <button
                            class="carousel-control-prev"
                            type="button"
                            data-bs-target="#carouselExampleFade"
                            data-bs-slide="prev"
                        >
                            <span
                                class="carousel-control-prev-icon"
                                aria-hidden="true"
                            ></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button
                            class="carousel-control-next"
                            type="button"
                            data-bs-target="#carouselExampleFade"
                            data-bs-slide="next"
                        >
                            <span
                                class="carousel-control-next-icon"
                                aria-hidden="true"
                            ></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
            </div>
            <div class="shape">
                <img src="img/shape.png" alt="shape" />
            </div>
        </div>
    </section>
    <!-- Slider End -->
</template>

<script>
export default {
    name: "Slider",
    mounted() {
        console.log('mounted');
    },
};
</script>

<style></style>
