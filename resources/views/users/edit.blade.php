<div class="container">
  <form action="{{route('update.user')}}" method="post">
      @csrf
      <input type="hidden" name="id" value="{{encrypt($user->id)}}">
      <div style="text-align:center"> 
      <div class="form-group">
          <br>
        <label>Donor Name :</label>
        <input type="string" name='donor_name' value="{{$user->donor_name}}" class="form-control"  placeholder="Enter donor name">
      </div>
      <div class="form-group">
          <br>
          <div class="form-group">
            <label>Email :</label>
            <input type="email" name='email' class="form-control" placeholder="Enter your Email">
        </div>

              <div class="form-group">
              <br>
              <label for="bloodgroup">Choose a Blood Group :</label>
               <select name="blood_group" id="Groups" value="{{$user->blood_group}}">
                <option value="A+">A+</option>
                <option value="A-">A-</option>
                <option value="B+">B+</option>
                <option value="B-">B-</option>
                <option value="O+">O+</option>
                <option value="O-">O-</option>
                <option value="AB+">AB+</option>
                <option value="AB-">AB-</option>
              </select>
              </div>

      <div class="form-group">
          <br>
        <label>Date of Donation</label>
        <input type="date" name='date_of_donation' value="{{$user->date_of_donation}}" class="form-control" placeholder="Date Of Birth">
      </div> 
      <br>
      <div class="form-group"> 
          <label for="quantity">Quantity:</label>
          <input type="number" id="quantity" value="{{$user->quantity}}" name="quantity" min="1" max="10">
          
      </div>  
      <div style="text-align:center"> 
          <br><br>       
      <button type="submit" class="btn btn-primary">Submit</button>
      </div>
    </form>   
</div>
</div>
