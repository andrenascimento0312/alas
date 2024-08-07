<div class="max-w-4xl flex items-center h-auto lg:h-screen flex-wrap mx-auto my-32 lg:my-0">

	<!--Main Col-->
	<div id="profile" class="w-full rounded-lg lg:rounded-l-lg lg:rounded-r-none shadow-2xl bg-white opacity-75 mx-6 lg:mx-0">


		<div class="p-4 md:p-12 text-center lg:text-left">
			<!-- Image for mobile view-->
			<div class="block lg:hidden rounded-full shadow-xl mx-auto -mt-16 h-48 w-48 bg-cover bg-center" style="background-image: url('../views/assets/img/jesusCristo.jpg')"></div>

			<h1 class="text-3xl font-bold pt-8 lg:pt-0">Ala Casa Forte</h1>
			<div class="mx-auto lg:mx-0 w-full pt-3 border-b-2 border-green-500 opacity-25"></div>

			<div class="pt-12 pb-8 flex flex-wrap md:flex-nowrap justify-center gap-6 w-full">
				<form class="rounded px-8 pt-6 pb-8 mb-4 w-full ala-form-sacramental" action="/GenerateAtaSacramental/" method="POST">
					<div class="mb-4">
						<label class="block text-sm font-bold mb-2" for="username">
							Nome da Ala
						</label>
						<input name="ala-name" class="shadow appearance-none border rounded w-full py-2 px-3 leading-tight focus:outline-none focus:shadow-outline ala-name" id="username" type="text" placeholder="exemplo@exemplo.com">
						<p class="text-red-500 text-xs italic ala-email-invalid"></p>
					</div>
					
					<div class="flex items-center justify-between">
						<button class="w-full bg-green-700 hover:bg-green-900 text-white font-bold py-2 px-4 rounded-full ala-ata-button-submit" type="submit">
							Gerar ata
						</button>
					</div>
				</form>
			</div>

			<!-- Use https://simpleicons.org/ to find the svg for your preferred product -->

		</div>

	</div>


	<!-- Pin to top right corner -->
	<div class="absolute top-0 right-0 h-12 w-18 p-4">
		<button class="js-change-theme focus:outline-none">🌙</button>
	</div>

</div>