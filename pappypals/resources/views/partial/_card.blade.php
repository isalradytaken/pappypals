<div class="form-row">
<label>
  <span>Card Number</span>
  <input type="text" size="20" data-stripe="number">
</label>
</div>

<div class="form-row">
<label>
  <span>Expiration (MM/YY)</span>
  <input type="text" size="2" data-stripe="exp_month">
</label>
<span> / </span>
<input  type="text" size="2" data-stripe="exp_year">
</div>

<div class="form-row">
<label>
  <span>CVC</span>
  <input  type="text" size="4" data-stripe="cvc">
</label>
</div>

<div class="form-row">
<label>
  <span>Billing Postal Code</span>
  <input type="text" size="6" data-stripe="address_zip">
</label>
</div>
<div class="form-row">
<label>
  <span>Discount code</span>
  <input type="text" size="6" name="coupon_code" data-stripe="coupon_code">
</label>
</div>