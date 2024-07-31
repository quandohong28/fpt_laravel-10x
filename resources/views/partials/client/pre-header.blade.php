@session('success')
    <div class="bg-green-500 text-white text-xs" id="pre-header">
        <div class="flex justify-between items-center px-20 py-2">
            <p>{{ session('success') }}</p>
        </div>
    </div>
@endsession

@session('error')
    <div class="bg-red-500 text-white text-xs" id="pre-header">
        <div class="flex justify-between items-center px-20 py-2">
            <p>{{ session('error') }}</p>
        </div>
    </div>
@endsession

<script>
    setTimeout(() => {
        document.querySelector('#pre-header').style.display = 'none';
    }, 3000);
</script>
