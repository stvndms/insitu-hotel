<h5> in tab resepsionis anjing </h5>
<form action="{{ route('logout') }}" method="POST">
    @csrf
    <button class="nav-link px-3 bg-light border-0" type="submit" onclick="return('Anda yakin ingin keluar?')">Logout</button>
</form>