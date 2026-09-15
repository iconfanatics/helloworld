<?php
/**
 * Template Name: 1st Class Real Estate Advantage
 *
 * Custom page template for /first-class-real-estate-advantage/
 */

get_header(); ?>

<style>
    /* Custom Styling for 1st Class Advantage Page */
    .fc-page-wrapper {
        font-family: 'Inter', -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, sans-serif;
        color: #333;
        line-height: 1.6;
        padding-bottom: 60px;
    }
    
    /* Hero Section */
    .fc-hero {
        background: linear-gradient(135deg, #0a2342 0%, #173f6b 100%);
        color: #fff;
        padding: 100px 20px;
        text-align: center;
    }
    .fc-hero h1 {
        font-size: 3rem;
        font-weight: 800;
        margin-bottom: 20px;
        color: #fff;
    }
    .fc-hero h3 {
        font-size: 1.5rem;
        font-weight: 400;
        margin-bottom: 30px;
        color: #d1e8ff;
    }
    .fc-hero p {
        max-width: 800px;
        margin: 0 auto 40px auto;
        font-size: 1.1rem;
        color: #e2e8f0;
    }
    .fc-btn-group {
        display: flex;
        gap: 20px;
        justify-content: center;
        flex-wrap: wrap;
    }
    .fc-btn {
        padding: 15px 30px;
        border-radius: 50px;
        text-decoration: none;
        font-weight: 600;
        transition: all 0.3s ease;
    }
    .fc-btn-primary {
        background: #facc15;
        color: #0a2342;
    }
    .fc-btn-primary:hover {
        background: #eab308;
        transform: translateY(-2px);
    }
    .fc-btn-secondary {
        background: transparent;
        color: #fff;
        border: 2px solid #fff;
    }
    .fc-btn-secondary:hover {
        background: #fff;
        color: #0a2342;
        transform: translateY(-2px);
    }

    /* Container */
    .fc-container {
        max-width: 1200px;
        margin: 0 auto;
        padding: 60px 20px;
    }

    /* Section Headings */
    .fc-section-heading {
        text-align: center;
        font-size: 2.2rem;
        color: #0a2342;
        margin-bottom: 40px;
        font-weight: 700;
    }

    /* Vision Section */
    .fc-vision {
        text-align: center;
        max-width: 900px;
        margin: 0 auto 60px auto;
        font-size: 1.1rem;
        color: #475569;
    }

    /* Pillars */
    .fc-pillars {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
        gap: 30px;
        margin-bottom: 80px;
    }
    .fc-pillar-card {
        background: #fff;
        padding: 40px 30px;
        border-radius: 12px;
        box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06);
        border-top: 4px solid #0a2342;
        transition: transform 0.3s ease;
    }
    .fc-pillar-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1);
    }
    .fc-pillar-card h3 {
        color: #0a2342;
        font-size: 1.3rem;
        margin-bottom: 15px;
    }

    /* Resources Grid */
    .fc-resources {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
        gap: 30px;
        margin-bottom: 80px;
    }
    .fc-resource-card {
        background: #f8fafc;
        border: 1px solid #e2e8f0;
        border-radius: 12px;
        padding: 40px 30px;
        text-align: center;
        transition: all 0.3s ease;
    }
    .fc-resource-card:hover {
        border-color: #cbd5e1;
        background: #fff;
        box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.05);
    }
    .fc-resource-card h3 {
        color: #0a2342;
        font-size: 1.3rem;
        margin-bottom: 15px;
    }
    .fc-resource-card p {
        color: #64748b;
        margin-bottom: 25px;
    }
    .fc-resource-link {
        display: inline-block;
        padding: 10px 25px;
        background: #0a2342;
        color: #fff;
        text-decoration: none;
        border-radius: 6px;
        font-weight: 600;
        transition: background 0.3s ease;
    }
    .fc-resource-link:hover {
        background: #173f6b;
    }

    /* Disclosure */
    .fc-disclosure {
        background: #f8fafc;
        border: 1px solid #cbd5e1;
        padding: 25px;
        border-radius: 8px;
        text-align: center;
        font-size: 0.9rem;
        color: #64748b;
        font-style: italic;
    }

    @media (max-width: 768px) {
        .fc-hero h1 { font-size: 2.2rem; }
        .fc-hero h3 { font-size: 1.2rem; }
    }
</style>

<div class="fc-page-wrapper">
    
    <!-- Hero Section -->
    <section class="fc-hero">
        <h1>1st Class Real Estate Advantage</h1>
        <h3>An Agent-First Real Estate Brokerage Serving South Carolina</h3>
        <p>1st Class Real Estate Advantage is built around a simple principle: when real estate professionals are given the right support, resources, and freedom to grow, clients receive an exceptional standard of service. Under Joel Barber's executive perspective and brokerage leadership, 1st Class Real Estate Advantage is expanding its presence across Myrtle Beach and communities throughout South Carolina.</p>
        <div class="fc-btn-group">
            <a href="https://advantage.1stclassre.com/" target="_blank" class="fc-btn fc-btn-primary">Explore 1st Class Advantage Services</a>
            <a href="https://advantage.1stclassre.com/" target="_blank" class="fc-btn fc-btn-secondary">Search Homes in South Carolina</a>
        </div>
    </section>

    <div class="fc-container">
        <!-- Section 1: The Brokerage Vision -->
        <h2 class="fc-section-heading">A Modern Brokerage Model Built for Long-Term Growth</h2>
        <div class="fc-vision">
            <p style="margin-bottom: 15px;">Traditional real estate models often place corporate bureaucracy ahead of local agent empowerment. 1st Class Real Estate Advantage was founded to invert that dynamic. By combining robust back-office technology, collaborative culture, and comprehensive operational training, the brokerage enables agents to focus on what matters most: serving homeowners, home buyers, and local investors with integrity.</p>
            <p>Joel Barber's connection to 1st Class Real Estate Advantage centers on strategic growth, leadership mentorship, and community-minded expansion across South Carolina. This philosophy bridges practical local experience with institutional standards of excellence.</p>
        </div>

        <!-- Section 2: Core Pillars of Service -->
        <h2 class="fc-section-heading">What Sets 1st Class Real Estate Advantage Apart</h2>
        <div class="fc-pillars">
            <div class="fc-pillar-card">
                <h3>An Agent-First Foundation</h3>
                <p>Real estate is inherently local and relationship-driven. By providing agents with industry-leading marketing tools, transaction support, and leadership mentorship, 1st Class Advantage ensures every client transaction is handled by an empowered, knowledgeable professional.</p>
            </div>
            <div class="fc-pillar-card">
                <h3>Comprehensive Client Support</h3>
                <p>Whether navigating the Myrtle Beach residential market, exploring coastal investment opportunities, or relocating to South Carolina, clients benefit from coordinated market intelligence, accurate property valuations, and dedicated local representation.</p>
            </div>
            <div class="fc-pillar-card">
                <h3>Purpose-Driven Culture</h3>
                <p>Aligned with Joel Barber's Purpose-Driven Real Estate philosophy, transactions are viewed not as one-time events, but as the foundation of enduring client relationships and positive community impact.</p>
            </div>
        </div>

        <!-- Section 3: Client Gateway & Resources -->
        <h2 class="fc-section-heading">Connect With 1st Class Real Estate Advantage</h2>
        <div class="fc-resources">
            <div class="fc-resource-card">
                <h3>Search Residential Properties</h3>
                <p>Browse currently available homes, coastal properties, and land listings across the Grand Strand and South Carolina.</p>
                <a href="https://advantage.1stclassre.com/" class="fc-resource-link">Search Properties</a>
            </div>
            <div class="fc-resource-card">
                <h3>Request Property Valuation</h3>
                <p>Receive an accurate, data-backed assessment of your home's current market value from licensed professionals.</p>
                <a href="https://advantage.1stclassre.com/seller/valuation/" class="fc-resource-link">Get Valuation</a>
            </div>
            <div class="fc-resource-card">
                <h3>Connect With Joel Barber</h3>
                <p>Learn more about Joel Barber's professional perspective, leadership insights, or discuss real estate opportunities directly.</p>
                <a href="/contact/" class="fc-resource-link">Contact Us</a>
            </div>
        </div>

        <!-- Section 4: Mandatory Legal Disclosure Box -->
        <div class="fc-disclosure">
            Licensed real estate brokerage services are provided through 1st Class Real Estate Advantage and its licensed agents. JoelBarberRealEstate.com serves as Joel Barber's personal executive authority platform.
        </div>
    </div>

</div>

<?php get_footer(); ?>
