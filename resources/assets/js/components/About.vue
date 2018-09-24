<template>
	<transition name="fade">
		<div class="content-about">
			<h2>Lorem ipsum dolor sit. <small>Lorem ipsum dolor.</small></h2>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorum, qui, nesciunt! Ad autem odit ex cum provident minima dolor, quod fugit similique doloribus, ratione officia accusamus recusandae alias obcaecati distinctio neque. Distinctio voluptatibus accusantium nobis quibusdam ipsa ut rerum facere quisquam ullam iure. Sequi a, ullam vitae doloribus perferendis vero quo laudantium earum. Nisi distinctio totam doloremque nihil! Dolor excepturi soluta repellat fugit! Magni animi rerum corporis consequatur voluptas voluptatem perferendis, id, reprehenderit reiciendis laudantium provident nihil labore quod totam vel sequi consectetur accusantium, hic a tempora mollitia nesciunt excepturi? Officia incidunt ab quos assumenda asperiores atque fugiat consectetur quis.</p>
		</div>
	</transition>
</template>
<script>
	export default{

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