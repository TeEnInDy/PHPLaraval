<style>
body {
    background-image: url('https://media.giphy.com/media/zo7nbbrQKwdb2rSG4k/giphy.gif');
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
}

.content {
    background-color: rgba(255, 255, 255, 0.8);
    border: 2px solid #333;
    border-radius: 10px;
    padding: 20px;
    margin: 50px auto;
    max-width: 600px;
}
</style>
<center>
    <div class="content">
        <h1>สูตรคูณ หรือ สูตรใคร</h1>
        <h1>ต้องการสูตรคูณแม่ไหนโปรดพิมพ์ใส่</h1>
        <form method="post" action="/my-route">
            @csrf
            <input type="text" name="multiplier">
            <button type="submit">ไปดูกันโล้ดด</button>
        </form>
    </div>

</center>