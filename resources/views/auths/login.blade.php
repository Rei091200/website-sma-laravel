<form action="/postlogin" method="POST">
    {{csrf_field()}}
    <div>
        <label>Email</label>
        <input type="email" placeholder="Email">
    </div>
    <div>
        <label>Password</label>
        <input type="password" placeholder="Password">
    </div>
    <button type="submit">LOGIN</button>
