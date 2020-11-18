import React from 'react';

const Footer = () => {
    
        return (
            <footer id="footer">
        <div className="footer-top wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
          <div className="container text-center">
            <div className="footer-logo">
              <a href="index.html"><img className="img-responsive" src="images/logo.png"  /></a>
            </div>
            <div className="social-icons">
              <ul>
                <li><a className="envelope" href="#"><i className="fa fa-envelope" /></a></li>
                <li><a className="twitter" href="#"><i className="fa fa-twitter" /></a></li> 
                <li><a className="dribbble" href="#"><i className="fa fa-dribbble" /></a></li>
                <li><a className="facebook" href="#"><i className="fa fa-facebook" /></a></li>
                <li><a className="linkedin" href="#"><i className="fa fa-linkedin" /></a></li>
                <li><a className="tumblr" href="#"><i className="fa fa-tumblr-square" /></a></li>
              </ul>
            </div>
          </div>
        </div>
        <div className="footer-bottom">
          <div className="container">
            <div className="row">
              <div className="col-sm-6">
                <p>© 2014 Oxygen Theme.</p>
              </div>
              <div className="col-sm-6">
                <p className="pull-right">Designed by <a href="http://www.themeum.com/">Themeum</a></p>
              </div>
            </div>
          </div>
        </div>
      </footer>
        );
    }


export default Footer;
