<section id="rsvp" class="rsvp section">
  <h2>RSVP</h2>
  <p>Couldn&#8217;t find your local mailbox? Respond here to let us know if you can join the festivities or if you?re in tears because you have to decline.</p>
  
  <form action="">
    <div class="form-item">
      <label for="first-name">First Name</label>
      <input type="text" name="first_name" id="first-name">
    </div>
    <div class="form-item">
      <label for="last-name">Last Name</label>
      <input type="text" name="last_name" id="last-name">
    </div>
    <div class="form-set form-two-col">
      <div class="form-col">
        <label>Attending?</label>
        <div class="form-item form-radio">
          <input type="radio" name="attending" value="Yes" id="yes" class="attending">
          <label for="yes">Yes</label>
        </div>
        <div class="form-item form-radio">
          <input type="radio" name="attending" value="No" id="no" class="attending">
          <label for="no">No</label>
        </div>
      </div>
      <div class="form-col">
        <div class="form-item form-select">
          <label for="num-attending"># Attending</label>
          <select name="num_attending" id="num-attending">
            <option value="1">1</option>
            <option value="2">2</option>
          </select>
        </div>
      </div>
    </div>
    <div class="form-item">
      <label for="message">Message</label>
      <textarea name="message" id="message"></textarea>
    </div>
    <div class="form-item">
      <button class="btn">Submit</button>
    </div>
  </form>
</section>