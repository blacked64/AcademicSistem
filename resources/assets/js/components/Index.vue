<template>
<transition name="fade">
    <div class="content-index">
              <div id="carouselId" class="carousel slide d-none d-lg-block d-md-block" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselId" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselId" data-slide-to="1"></li>
                    <li data-target="#carouselId" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner" role="listbox">
                    <div class="carousel-item active">
                        <img src="/images/0.jpg" class="image-home" alt="First slide">
                        <div class="carousel-caption d-none d-md-block">
                            <h3>Title</h3>
                            <p>Description</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="/images/1.jpg" class="image-home" alt="Second slide">
                        <div class="carousel-caption d-none d-md-block">
                            <h3>Title</h3>
                            <p>Description</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="/images/2.jpg" class="image-home" alt="Third slide">
                        <div class="carousel-caption d-none d-md-block">
                            <h3>Title</h3>
                            <p>Description</p>
                        </div>
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselId" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselId" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
            <div class="row col-md-12">
                <h1>Lorem ipsum dolor sit amet.</h1>
                <h3>Lorem, ipsum dolor.</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo tempore minima similique ut. Fuga earum est porro repudiandae laudantium reprehenderit quia dolorem deserunt labore nobis magni maiores nesciunt aspernatur magnam cumque suscipit accusamus voluptatem sit eum, aliquid minima ut? Tempore fuga corporis magnam aliquid consectetur non quae odio, facere soluta illum magni nulla pariatur cupiditate culpa minus perferendis quaerat modi numquam? Officia labore autem consectetur corrupti minus iure quisquam aliquam officiis mollitia nihil nesciunt vel, debitis rem dignissimos eius alias omnis quaerat veritatis? Perferendis accusantium maxime amet consectetur facilis, omnis laborum. Harum blanditiis sequi unde atque soluta hic, quia ducimus.</p>
                <h1>Lorem ipsum dolor sit amet.</h1>
                <h3>Lorem, ipsum dolor.</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo tempore minima similique ut. Fuga earum est porro repudiandae laudantium reprehenderit quia dolorem deserunt labore nobis magni maiores nesciunt aspernatur magnam cumque suscipit accusamus voluptatem sit eum, aliquid minima ut? Tempore fuga corporis magnam aliquid consectetur non quae odio, facere soluta illum magni nulla pariatur cupiditate culpa minus perferendis quaerat modi numquam? Officia labore autem consectetur corrupti minus iure quisquam aliquam officiis mollitia nihil nesciunt vel, debitis rem dignissimos eius alias omnis quaerat veritatis? Perferendis accusantium maxime amet consectetur facilis, omnis laborum. Harum blanditiis sequi unde atque soluta hic, quia ducimus.</p>
                <h1>Lorem ipsum dolor sit amet.</h1>
                <h3>Lorem, ipsum dolor.</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo tempore minima similique ut. Fuga earum est porro repudiandae laudantium reprehenderit quia dolorem deserunt labore nobis magni maiores nesciunt aspernatur magnam cumque suscipit accusamus voluptatem sit eum, aliquid minima ut? Tempore fuga corporis magnam aliquid consectetur non quae odio, facere soluta illum magni nulla pariatur cupiditate culpa minus perferendis quaerat modi numquam? Officia labore autem consectetur corrupti minus iure quisquam aliquam officiis mollitia nihil nesciunt vel, debitis rem dignissimos eius alias omnis quaerat veritatis? Perferendis accusantium maxime amet consectetur facilis, omnis laborum. Harum blanditiis sequi unde atque soluta hic, quia ducimus.</p>
            </div>
    </div>
</transition>
</template>
<script>
export default {
    data(){
        return {
        	
        }
    }
}
</script>
<style>
.fade-enter-active, .fade-leave-active {
  transition: opacity .5s;
}
.fade-enter, .fade-leave-to /* .fade-leave-active below version 2.1.8 */ {
  opacity: 0;
}
</style>
