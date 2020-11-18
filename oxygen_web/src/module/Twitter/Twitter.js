import React, { Component } from 'react';

class Twitter extends Component {
    render() {
        return (
            <section id="twitter" className="parallax">
        <div>
          <a className="twitter-left-control" href="#twitter-carousel" role="button" data-slide="prev"><i className="fa fa-angle-left" /></a>
          <a className="twitter-right-control" href="#twitter-carousel" role="button" data-slide="next"><i className="fa fa-angle-right" /></a>
          <div className="container">
            <div className="row">
              <div className="col-sm-8 col-sm-offset-2">
                <div className="twitter-icon text-center">
                  <i className="fa fa-twitter" />
                  <h4>Themeum</h4>
                </div>
                <div id="twitter-carousel" className="carousel slide" data-ride="carousel">
                  <div className="carousel-inner">
                    <div className="item active wow fadeIn" data-wow-duration="1000ms" data-wow-delay="300ms">
                      <p>Introducing Shortcode generator for Helix V2 based templates <a href="#"><span>#helixframework #joomla</span> http://bit.ly/1qlgwav</a></p>
                    </div>
                    <div className="item">
                      <p>Introducing Shortcode generator for Helix V2 based templates <a href="#"><span>#helixframework #joomla</span> http://bit.ly/1qlgwav</a></p>
                    </div>
                    <div className="item">                                
                      <p>Introducing Shortcode generator for Helix V2 based templates <a href="#"><span>#helixframework #joomla</span> http://bit.ly/1qlgwav</a></p>
                    </div>
                  </div>                        
                </div>                    
              </div>
            </div>
          </div>
        </div>
      </section>
        );
    }
}

export default Twitter;
