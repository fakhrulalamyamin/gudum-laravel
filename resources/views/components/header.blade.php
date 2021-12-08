<div class="w-full fixed top-0 px-12 py-4 flex justify-between items-center z-30 sticky-header {{request()-> routeIs('home') ? '' : 'general-header'}} ">
	<div class="min-w-max">
		<a href="{{route('home')}}">
			<img width="150" src="/img/logo.png" alt="Logo">
		</a>
	</div>

	<div class="w-full">
		<ul class="flex justify-center">
			<li><a class="inline-block p-4 text-white" href="#">Land</a></li>
			<li><a class="inline-block p-4 text-white" href="#">Apartment</a></li>
			<li><a class="inline-block p-4 text-white" href="#">Villa</a></li>
			<li><a class="inline-block p-4 text-white" href="#">About Us</a></li>
			<li><a class="inline-block p-4 text-white" href="#">Contact Us</a></li>
		</ul>
	</div>

	<div class="min-w-max">
		<a href="#">
			<img draggable="false" class="w-7 inline" alt="🇹🇷" src="https://twemoji.maxcdn.com/2/svg/1f1f9-1f1f7.svg">
		</a>
		<a href="#">
			<img draggable="false" class="w-7 inline" alt="🇺🇸" src="https://twemoji.maxcdn.com/2/svg/1f1fa-1f1f8.svg">
		</a>
	</div>
</div>