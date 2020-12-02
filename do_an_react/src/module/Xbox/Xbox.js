import React, { useState } from 'react';
import FadeAnimation from 'react-fade-animation';
import FadeIn from 'react-fade-in';
import {CSSTransition} from"react-transition-group"

const Xbox = () => {
    const [an_hien_hinh, setAnHienHinh] = useState(true);

    const handleClick = (e) => {
        if (an_hien_hinh == 1) {
        
          console.log('đã click vào ReadMore Xbox Component');
        console.log(e);
        
        setAnHienHinh(false);
        }
      if (an_hien_hinh == 0 ) {
        console.log(e);
        console.log('đã biện');
        setAnHienHinh(true);
      }
      
      

    }
  
    
        return (
        
        <div className="x-box">
        <div className="container">	
        <div className="x-box_sec">
          <div className="col-md-7 x-box-left">
            <h2>XBOX 360</h2>
            <h3>Suspendisse ornare nisl et tellus convallis, non vehicula nibh convallis.</h3>
            <p>Proin ornare metus eros, quis mattis lorem venenatis eget. Curabitur eget dui
            euismod, varius nisl eu, pharetra lacus. Sed vehicula tempor leo. Aenean dictum suscipit magna vel tempus. 
            Aliquam nec dui dolor. Quisque scelerisque aliquet est et dignissim.</p>
            <a className="hvr-bounce-to-top" onClick={handleClick} >Read More</a>
          </div>
          {
            
            (an_hien_hinh==1  )?
            
            <div className="col-md-5 x-box-right">
              {/* <div className="w3-animate-fading"> */}
              <FadeAnimation duration={2.0}  startDistance={70} from={"bottom"}>
              <img src="images/xbox.jpg" className="img_responsive" alt=""/>
              </FadeAnimation>
              </div>

            // </div>
            :
            <div className="col-md-5 x-box-right">
             <FadeAnimation duration={2.0}  startDistance={70} from={"bottom"}>
              <img src="images/xbox.jpg" className="img_responsive" alt=""/>

              </FadeAnimation>
              </div>
            }
          
          <div className="clearfix"></div>
        </div>
      </div>
    </div>
      );
    }

export default Xbox;
