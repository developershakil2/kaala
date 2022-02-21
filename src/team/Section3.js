import React, {useEffect} from 'react';
import AOS from 'aos';
import 'aos/dist/aos.css';
import Globe2 from './images/globe.png';
const ThirdSec =()=>{
    useEffect(()=>{
    AOS.init()
    },[])
 
    return(
        <>
        <section style={{background: '#0B0B0B',boxShadow:'0px 0px 50px #0B0B0B'}} id="third">
            <div id="third_container" className="container m-auto row">
                <div id="third_text" className="col-12 col-md-6 col-lg-lg-6 col-xl-6 third_text">
                    <h3>Product 1</h3>
                    <span id="wt"></span>
                    <div data-aos="fade-right" className="third_text_wrapper">
                         <p> 
</p>
                        </div>
                </div>
                <div data-aos="fade-left" id="third_img2" className="col-12 col-md-6 col-lg-lg-6 col-xl-6 third_img">
                    <img src={Globe2} alt="third_sec_image"/>                      
                </div>
            </div>
        </section>
        
        </>
    )
}

export default ThirdSec;