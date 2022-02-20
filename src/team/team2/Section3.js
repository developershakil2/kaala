import React, {useEffect} from 'react';
import AOS from 'aos';
import Img from '../images/ppp.png';
import 'aos/dist/aos.css';
const Sec3 =()=>{
    useEffect(()=>{
    AOS.init()
    },[])

    return(
        <>
        <section id="third">
            <div id="third_container" className="container m-auto row">
                <div id="third_text" className="col-12 col-md-6 col-lg-lg-6 col-xl-6 third_text">
                    <h3>Shivakumar Movva</h3>
                    <span id="wt"></span>
                    <div data-aos="fade-right" className="third_text_wrapper">
                         <p>  
</p>
                        </div>
                </div>
                <div data-aos="fade-left" id="third_img" className="col-12 col-md-6 col-lg-lg-6 col-xl-6 third_img">
                 <img src={Img} alt="person"/>

                </div>
            </div>
        </section>
        
        </>
    )
}

export default Sec3;