<section id="rsvp" class="rsvp section">
  <h2>RSVP</h2>
  <p>Couldn?t find your local mailbox? Respond here to let us know if you can join the festivities or if you?re in tears because you have to decline.</p>
  
  <form>
    <div class="form-item">
      <label for="first-name">First Name</label>
      <input type="text" name="first-name" id="first-name">
    </div>
    <div class="form-item">
      <label for="last-name">Last Name</label>
      <input type="text" name="last-name">
    </div>
    <div class="form-set form-two-col">
      <div class="form-col">
        <label>Attending?</label>
        <div class="form-item form-radio">
          <input type="radio" name="attending" value="yes" id="yes">
          <label for="yes">Yes</label>
        </div>
        <div class="form-item form-radio">
          <input type="radio" name="attending" value="no" id="no">
          <label for="no">No</label>
        </div>
      </div>
      <div class="form-col">
        <div class="form-item form-select">
          <label for="num-attending"># Attending</label>
          <select name="num-attending">
            <option value="1">1</option>
            <option value="2">2</option>
          </select>
        </div>
      </div>
    </div>
    <div class="form-item">
      <label for="message">Message</label>
      <textarea name="message"></textarea>
    </div>
    <div class="form-item">
      <button class="btn">Submit</button>
    </div>
  </form>
</section>