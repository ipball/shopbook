<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Shop Book</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>

<body class="bg-light">
    <div class="container" style="width: 960px;">
        <main>
            <div class="py-5 text-center">
                <img src="https://laravel.com/img/logotype.min.svg">
                <h2>Checkout form</h2>
                <p class="lead">ระบบสั่งซื้อสินค้าออนไลน์ ง่ายดายเพียงปลายนิ้ว</p>
            </div>

            <div class="row g-5">
                <div class="col-md-5 col-lg-4 order-md-last">
                    <h4 class="d-flex justify-content-between align-items-center mb-3">
                        <span class="text-primary">Your cart</span>
                        <span class="badge bg-primary rounded-pill">3</span>
                    </h4>
                    <ul class="list-group mb-3">
                        <li class="list-group-item d-flex justify-content-between lh-sm">
                            <div>
                                <h6 class="my-0">ขนมปังใส้มายองเนส</h6>
                                <small class="text-muted">สุดยอดขนมปังแสนอร่อย อิ่มแน่นอน</small>
                            </div>
                            <span class="text-muted">฿12</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between lh-sm">
                            <div>
                                <h6 class="my-0">นมเปรี้ยว ตราสุขใจ</h6>
                                <small class="text-muted">นมเปรี้ยวขนาด 100ML อร่อยเต็มๆ</small>
                            </div>
                            <span class="text-muted">฿10</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between lh-sm">
                            <div>
                                <h6 class="my-0">ยาสีฟัน มายดรีม</h6>
                                <small class="text-muted">ยาสีฟัน ฟันขาวสดชื่น</small>
                            </div>
                            <span class="text-muted">฿20</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between bg-light">
                            <div class="text-success">
                                <h6 class="my-0">Promo code</h6>
                                <small>ส่วนลดพิเศษ</small>
                            </div>
                            <span class="text-success">−฿5</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between">
                            <span>Total (USD)</span>
                            <strong>฿37</strong>
                        </li>
                    </ul>

                    <form class="card p-2">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Promo code">
                            <button type="submit" class="btn btn-secondary">Redeem</button>
                        </div>
                    </form>
                </div>
                <div class="col-md-7 col-lg-8">
                    <h4 class="mb-3">Billing address</h4>
                    <form method="post" action="{{ url('/book') }}">
                        @csrf
                        <div class="row g-3">
                            <div class="col-sm-6">
                                <label class="form-label">ชื่อ</label>
                                <input type="text" name="firstname" class="form-control @error('firstname') is-invalid @enderror" value="{{ old('firstname') }}">
                                <div class="invalid-feedback">
                                    {{ $errors->first('firstname') }}
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <label class="form-label">นามสกุล</label>
                                <input type="text" name="lastname" class="form-control @error('lastname') is-invalid @enderror" value="{{ old('lastname') }}">
                                <div class="invalid-feedback">
                                    {{ $errors->first('lastname') }}
                                </div>
                            </div>

                            <div class="col-12">
                                <label for="username" class="form-label">Username</label>
                                <div class="input-group has-validation">
                                    <span class="input-group-text">@</span>
                                    <input type="text" name="username" class="form-control @error('username') is-invalid @enderror" value="{{ old('username') }}">
                                    <div class="invalid-feedback">
                                        {{ $errors->first('username') }}
                                    </div>
                                </div>
                            </div>

                            <div class="col-6">
                                <label for="email" class="form-label">Email</label>
                                <input type="text" name="email" class="form-control @error('email') is-invalid @enderror" placeholder="you@example.com" value="{{ old('email') }}">
                                <div class="invalid-feedback">
                                    {{ $errors->first('email') }}
                                </div>
                            </div>

                            <div class="col-6">
                                <label for="zip" class="form-label">เบอร์โทร</label>
                                <input type="text" name="tel" class="form-control @error('tel') is-invalid @enderror" value="{{ old('tel') }}">
                                <div class="invalid-feedback">
                                    {{ $errors->first('tel') }}
                                </div>
                            </div>

                            <div class="col-12">
                                <label for="address" class="form-label">ที่อยู่</label>
                                <input type="text" name="address" class="form-control" placeholder="1234 หมู่ 9 ต.บางรัก อ.บางประกง กรุงเทพฯ 11220" value="{{ old('address') }}">
                                <div class="invalid-feedback">
                                    Please enter your shipping address.
                                </div>
                            </div>
                        </div>

                        <hr class="my-4">

                        <button class="w-100 btn btn-primary btn-lg" type="submit">Continue to checkout</button>
                    </form>
                </div>
            </div>
        </main>

        <footer class="my-5 pt-5 text-muted text-center text-small">
            <p class="mb-1">&copy; 2017–2022 Company Name</p>
            <ul class="list-inline">
                <li class="list-inline-item"><a href="#">Privacy</a></li>
                <li class="list-inline-item"><a href="#">Terms</a></li>
                <li class="list-inline-item"><a href="#">Support</a></li>
            </ul>
        </footer>
    </div>
    
</body>

</html>
