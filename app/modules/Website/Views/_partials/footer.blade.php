<footer class="bottom">
	@if (!Auth::guest() and isAdmin())
		<a href="#" id="editIt" class="btn btn-primary btn-sm">Edit</a>
	@endif
</footer>