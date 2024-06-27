<div class="max-w-4xl flex items-center h-auto lg:h-screen flex-wrap mx-auto my-32 lg:my-0">

	<!--Main Col-->
	<div id="profile" class="w-full rounded-lg lg:rounded-l-lg lg:rounded-r-none shadow-2xl bg-white opacity-75 mx-6 lg:mx-0">


		<div class="p-4 md:p-12 text-center lg:text-left">
			<!-- Image for mobile view-->
			<div class="block lg:hidden rounded-full shadow-xl mx-auto -mt-16 h-48 w-48 bg-cover bg-center" style="background-image: url('../../assets/img/jesusCristo.jpg')"></div>

			<h1 class="text-3xl font-bold pt-8 lg:pt-0">Listegem de Aulas</h1>
			<div class="mx-auto lg:mx-0 w-full pt-3 border-b-2 border-green-500 opacity-25"></div>
			
			<div class="flex justify-between pt-4">
				<a class="font-bold" href="/admin">voltar</a>
				<a href="adicionar/" class="max-w-max text-center bg-green-700 hover:bg-green-900 text-white font-bold py-2 px-4 rounded-full">Adicionar +</a>
			</div>

			<div class="pt-12 pb-8 flex flex-wrap justify-center gap-2">
				<?php foreach($classes as $class):?>
					<a href="<?php echo $class['link']; ?>" class="w-full text-center bg-green-700 hover:bg-green-900 text-white font-bold py-2 px-4 rounded-full">
						<?php echo $class['name']; ?>
					</a>

					<div class="flex gap-4 mb-6">
						<a class="editClassMeeting cursor-pointer" data-id="<?php echo $class['id']?>">Editar</a>
						<a class="excludeClassMeeting cursor-pointer" data-id="<?php echo $class['id']?>">Excluir</a>
					</div>
				<?php endforeach; ?>
			</div>

			

			<!-- Use https://simpleicons.org/ to find the svg for your preferred product -->

		</div>

	</div>

	<!-- Pin to top right corner -->
	<div class="absolute top-0 right-0 h-12 w-18 p-4">
		<button class="js-change-theme focus:outline-none">🌙</button>
	</div>

</div>
<script src="../../views/assets/helpers.js"></script>
<script src="../../views/assets/adminDeleteAula.js"></script>
<script src="../../views/assets/adminUpdateSendAula.js"></script>