@extends('layouts.default')
@section('content')
    <!-- Cart Start -->




    <section class="bg-light">
        <div class="container pb-5">
            <div class="row">
                <div class="col-lg-7 mt-5">
                    <div class="card mb-3">
                        <table class="table  table-borderless table-hover text-center mb-0">
                            <thead class="thead-dark">
                                <tr>
                                    <th>Products</th>
                                    <th>Price</th>
                                    <th>Quantity</th>
                                    <th>Total</th>
                                    <th>Remove</th>
                                </tr>
                            </thead>
                            <tbody class="align-middle">
                                <tr>
                                    <td class="align-middle"><img src="img/product-1.jpg" alt="" style="width: 50px;"> Product Name</td>
                                    <td class="align-middle">$150</td>
                                    <td class="align-middle">
                                        <ul class="list-inline" style="margin: 6px 0px;">
                                            <li class="list-inline-item"><span class="btn btn-success" id="btn-minus" style="margin-top: 2px;">-</span></li>
                                            <li class="list-inline-item"><span class="badge bg-secondary" id="var-value">1</span></li>
                                            <li class="list-inline-item"><span class="btn btn-success" id="btn-plus" style="margin-top: 2px;">+</span></li>
                                        </ul>
                                    </td>
                                    <td class="align-middle">$150</td>
                                    <td class="align-middle"><button class="btn btn-sm btn-danger"><i class="fa fa-times"></i></button></td>
                                </tr>
                                <tr>
                                    <td class="align-middle"><img src="img/product-2.jpg" alt="" style="width: 50px;"> Product Name</td>
                                    <td class="align-middle">$150</td>
                                    <td class="align-middle">
                                        <ul class="list-inline" style="margin: 6px 0px;">
                                            <li class="list-inline-item"><span class="btn btn-success" id="btn-minus" style="margin-top: 2px;">-</span></li>
                                            <li class="list-inline-item"><span class="badge bg-secondary" id="var-value">1</span></li>
                                            <li class="list-inline-item"><span class="btn btn-success" id="btn-plus" style="margin-top: 2px;">+</span></li>
                                        </ul>
                                    </td>
                                    <td class="align-middle">$150</td>
                                    <td class="align-middle"><button class="btn btn-sm btn-danger"><i class="fa fa-times"></i></button></td>
                                </tr>
                                <tr>
                                    <td class="align-middle"><img src="img/product-3.jpg" alt="" style="width: 50px;"> Product Name</td>
                                    <td class="align-middle">$150</td>
                                    <td class="align-middle">
                                        <ul class="list-inline" style="margin: 6px 0px;">
                                            <li class="list-inline-item"><span class="btn btn-success" id="btn-minus" style="margin-top: 2px;">-</span></li>
                                            <li class="list-inline-item"><span class="badge bg-secondary" id="var-value">1</span></li>
                                            <li class="list-inline-item"><span class="btn btn-success" id="btn-plus" style="margin-top: 2px;">+</span></li>
                                        </ul>
                                    </td>
                                    <td class="align-middle">$150</td>
                                    <td class="align-middle"><button class="btn btn-sm btn-danger"><i class="fa fa-times"></i></button></td>
                                </tr>
                                <tr>
                                    <td class="align-middle"><img src="img/product-4.jpg" alt="" style="width: 50px;"> Product Name</td>
                                    <td class="align-middle">$150</td>
                                    <td class="align-middle">
                                        <ul class="list-inline" style="margin: 6px 0px;">
                                            <li class="list-inline-item"><span class="btn btn-success" id="btn-minus" style="margin-top: 2px;">-</span></li>
                                            <li class="list-inline-item"><span class="badge bg-secondary" id="var-value">1</span></li>
                                            <li class="list-inline-item"><span class="btn btn-success" id="btn-plus" style="margin-top: 2px;">+</span></li>
                                        </ul>
                                    </td>
                                    <td class="align-middle">$150</td>
                                    <td class="align-middle"><button class="btn btn-sm btn-danger"><i class="fa fa-times"></i></button></td>
                                </tr>
                                <tr>
                                    <td class="align-middle"><img src="img/product-5.jpg" alt="" style="width: 50px;"> Product Name</td>
                                    <td class="align-middle">$150</td>
                                    <td class="align-middle">
                                        <ul class="list-inline" style="margin: 6px 0px;">
                                            <li class="list-inline-item"><span class="btn btn-success" id="btn-minus">-</span></li>
                                            <li class="list-inline-item"><span class="badge bg-secondary" id="var-value">1</span></li>
                                            <li class="list-inline-item"><span class="btn btn-success" id="btn-plus" style="margin-top: 2px;">+</span></li>
                                        </ul>
                                    </td>
                                    <td class="align-middle">$150</td>
                                    <td class="align-middle"><button class="btn btn-sm btn-danger"><i class="fa fa-times"></i></button></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    
                </div>
                <!-- col end -->
                <div class="col-lg-5 mt-5">
                    <div class="card">
                        <div class="card-body">
                            <div class=" p-30 mb-5">
                                <div class="border-bottom pb-2">
                                    <div class="d-flex justify-content-between mb-3">
                                        <h6>Subtotal</h6>
                                        <h6>$150</h6>
                                    </div>
                                    <div class="d-flex justify-content-between">
                                        <h6 class="font-weight-medium">Shipping</h6>
                                        <h6 class="font-weight-medium">$10</h6>
                                    </div>
                                </div>
                                <div class="pt-2">
                                    <div class="d-flex justify-content-between mt-2">
                                        <h5>Total</h5>
                                        <h5>$160</h5>
                                    </div>
                                    <button type="submit" class="btn btn-success btn-lg" name="submit" value="addtocard">Proceed To Checkout</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>




    <!-- Cart End -->
@stop