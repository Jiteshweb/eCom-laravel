@extends('master')
@section('content')
    <div class="custom-product">

        <div class="col-sm-6">
            <table class="table table-condensed">
                <tbody>
                    <tr>
                        <td>Price</td>
                        <td>{{ $total }}Ruppes</td>
                    </tr>
                    <tr>
                        <td>tax</td>
                        <td>0 Rupees</td>
                    </tr>
                    <tr>
                        <td>Delivery</td>
                        <td>100</td>
                    </tr>
                    <tr>
                        <td>Total Amount</td>
                        <td>{{ $total + 100 }}</td>
                    </tr>
                </tbody>
            </table>
            <form action="orderplace" method="POST">
                @csrf
                <div class="form-group">
                    <textarea placeholder="enter your address" name="address" class="form-control"> </textarea>
                </div>
                <div class="form-group">
                    <label for="">Payment Method</label>
                    <p> <input type="radio" value="cash" name="payment"><span>Online Payment</span></p>
                    <p> <input type="radio" value="cash" name="payment"><span>Cash On Delivery</span></p>
                    <p> <input type="radio" value="cash" name="payment"><span>Credit/Debit Card</span></p>
                    <p> <input type="radio" value="cash" name="payment"><span>UPI Payment </span></p>
                    <p> <input type="radio" value="cash" name="payment"><span>EMI Payment </span></p>
                </div>
                <button type="submit" class="btn btn-default">Order Now</button>
            </form>

        </div>
    </div>
@endsection
