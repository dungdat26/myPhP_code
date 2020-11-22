import React, { Component } from 'react';

class FooterWrapper extends Component {  
        constructor(props){
          super(props);
          this.state = {
              name: '',
              mobilenumbers: '',
              message: '',
              
          };
          this.handleChangeInput = this.handleChangeInput.bind(this);
      }
      handleChangeInput = (e) =>{
          console.log(e.target.value);
          this.setState({
              [e.target.name]: e.target.value
            
          })

      }
       render() {
        return (
            <div className="footerwrapper">
            <footer className="container">
              <div className="customerreview">
                <h2>Customer Reviews</h2>
                <div className="review">
                  <p><strong>“ </strong>This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor 
                    aliquet. Aenean 			            sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum,
                    nec sagittis sem nibh id elit.
                    Duis sed odio sit amet nibh vulputate  a ornare odio. Sed non  mauris vitae erat consequat  
                    <strong>”</strong></p>
                  <h4>- JOHN ALVES</h4>
                </div> 
                <div className="clearfix" />
                <div className="line" />
                <div className="review">
                  <p><strong>“ </strong>This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor 
                    aliquet. Aenean 			            sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum,
                    nec sagittis sem nibh id elit.
                    Duis sed odio sit amet nibh vulputate  a ornare odio. Sed non  mauris vitae erat consequat  
                    <strong>”</strong></p>
                  <h4>- CATHREINE JOHNES</h4>
                </div> 
              </div>
              <div className="socialize">
                <h2>Socialize</h2>
                <div className="socialimgs">
                  <a href="https://www.facebook.com/Mido.HHH"><img src="images/fb.png" width={68} height={68} className="facebook" alt="fb" /></a>
                  <a href="https://twitter.com/Mido_A7X"><img src="images/twitter.png" width={68} height={68} className="twitter" alt="twitter" /></a>
                  <a href="#"><img src="images/youtube.png" width={68} height={69} className="youtube" alt="youtube" /></a>
                  <a href="#"><img src="images/g+.png" width={68} height={68} className="google" alt="g+" /></a>
                  <a href="#"><img src="images/message.png" width={68} height={68} className="message" alt="message" /></a>
                </div> 
              </div>
              <div className="sendfeedback">
                <h2>Send Feedback</h2>
                <form>
                  <h6>Your Name:</h6>
                  <input type="text" name="name" Value={this.state.name} onChange={this.handleChangeInput} className="yourname" />
                  <h6>Mobile Number :</h6>
                  <input type="text" name="mobilenumbers"  Value={this.state.mobilenumbers} onChange={this.handleChangeInput} className="mobilenumber" />
                  <h6>Message :</h6>
                  <textarea name="message" Value={this.state.message} onChange={this.handleChangeInput} className="messages" defaultValue={""} />
                  <button type="submit">SUBMIT </button>
                </form>
              </div> 
            </footer> 
      </div>
        );
    }
  }


export default FooterWrapper;
