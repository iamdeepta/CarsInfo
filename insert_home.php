<div class="form-group table-responsive">
            <table class="table table-bordered">
              <thead>
                <form action="insert.php" method="post">
                <tr>
                <th>Manufacturer</th>
                <th>Model</th>
                <th>Year</th>
                <th>Producing Country</th>
                <th>Quantity</th>
                <th>Action</th>
              </tr>
              </thead>

              <tr>

              <td><input class="form-control" type="text" name="manufacturer" required></td>
              <td><input class="form-control" type="text" name="model" required></td>
              <td><input class="form-control" type="number" min="1900" max="2020" step="1" value="1900" name="year" required></td>
              <td><input class="form-control" type="text" name="producing_country" required></td>
              <td><input class="form-control" type="number" name="quantity" value="0" required></td>
              <td><button type="submit" name="insert" id="insert" class="btn btn-primary">Create</button></td>
            </tr>
          </form>
            </table>
          </div>