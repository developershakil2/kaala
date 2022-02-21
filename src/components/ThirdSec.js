import React, {useEffect} from 'react';
import DoneIcon from '@mui/icons-material/Done';
import AOS from 'aos';
import 'aos/dist/aos.css';
const ThirdSec =()=>{
    useEffect(()=>{
    AOS.init()
    },[])

    return(
        <>
        <section id="third">
            <div id="third_container" className="container m-auto row">
                <div id="third_text" className="col-12 col-md-6 col-lg-lg-6 col-xl-6 third_text">
                    <h3 style={{position:'relative'}} className="text-center">Services</h3>
                    <span id="wt"></span>
                    <div data-aos="fade-right" className="third_text_wrapper">
                         <p style={{lineHeight:'20px'}}> Implementation of green and innovative concepts</p>
                         <p style={{lineHeight:'20px'}} className='mt-4'>
                      International trade towords Envirnomental
                       sustainability Initiatives</p>
                       <p className="mt-4">
                         Product and material end to end traceability</p>
                        </div>
                </div>
                <div data-aos="fade-left" id="third_img" className="col-12 col-md-6 col-lg-lg-6 col-xl-6 third_img">
                <iframe src="https://embed.lottiefiles.com/animation/56978"></iframe>


                </div>
            </div>
        </section>
        
        </>
    )
}

export default ThirdSec;