import React from 'react';

const Features = () => {
    
        return (
            <section id="features" className="parallax">
        <div className="container">
          <div className="row count">
            <div className="col-sm-3 col-xs-6 wow fadeInLeft" data-wow-duration="1000ms" data-wow-delay="300ms">
              <i className="fa fa-user" />
              <h3 className="timer">4000</h3>
              <p>Happy Clients</p>
            </div>
            <div className="col-sm-3 col-xs-6 wow fadeInLeft" data-wow-duration="1000ms" data-wow-delay="500ms">
              <i className="fa fa-desktop" />
              <h3 className="timer">200</h3>                    
              <p>Modern Websites</p>
            </div> 
            <div className="col-sm-3 col-xs-6 wow fadeInLeft" data-wow-duration="1000ms" data-wow-delay="700ms">
              <i className="fa fa-trophy" />
              <h3 className="timer">10</h3>                    
              <p>WINNING AWARDS</p>
            </div> 
            <div className="col-sm-3 col-xs-6 wow fadeInLeft" data-wow-duration="1000ms" data-wow-delay="900ms">
              <i className="fa fa-comment-o" />                    
              <h3>24/7</h3>
              <p>Fast Support</p>
            </div>                 
          </div>
        </div>
      </section>
        );
    }


export default Features;
