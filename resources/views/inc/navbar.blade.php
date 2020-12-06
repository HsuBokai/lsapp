<b-navbar type="dark" variant="dark">
	<b-navbar-brand href="/">{{config('app.name', 'LSAPP')}}</b-navbar-brand>
	<b-navbar-nav>
		<b-nav-item href="/">Home</b-nav-item>
		<b-nav-item href="/about">About</b-nav-item>
		<b-nav-item href="/services">Services</b-nav-item>
		<b-nav-item href="/posts">Blog</b-nav-item>
	</b-navbar-nav>
	<b-navbar-nav class="ml-auto">
		<b-nav-item-dropdown text="Create" right>
			<b-dropdown-item href="/posts/create">New Post</b-dropdown-item>
		</b-nav-item-dropdown>
	</b-navbar-nav>
</b-navbar>
