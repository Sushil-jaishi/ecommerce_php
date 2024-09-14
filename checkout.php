<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Checkout Page</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>

<div class="container mt-5">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card">
        <div class="card-header bg-primary text-white">
          <h4 class="text-center">Proceed to Checkout</h4>
        </div>
      

            <!-- Payment Method -->
            <div class="mb-3">
              <label for="payment" class="form-label">Payment Method</label>
              <select class="form-select" id="payment" name="payment" required>
                <option value="" disabled selected>Select payment method</option>
                <option value="cod">Cash on Delivery</option>
                <option value="online">Online Payment</option>
              </select>
            </div>

            <!-- Buttons -->
            <div class="d-flex justify-content-between mt-4">
              <button type="submit" class="btn btn-success btn-lg">Confirm Order</button>
              <button type="reset" class="btn btn-danger btn-lg">Cancel Order</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
