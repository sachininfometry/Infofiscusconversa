<?php
/**
 * Template Name: INFOFISCUS Conversa Product
 * Template Post Type: page
 *
 * @package Infometry_Product_Templates
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

get_header();

$demo_url    = apply_filters( 'infometry_conversa_demo_url', home_url( '/infofiscus-analytics-sign-up-for-demo/' ) );
$contact_url = apply_filters( 'infometry_conversa_contact_url', home_url( '/contact-us/' ) );
$intro_video = apply_filters( 'infometry_conversa_intro_video_url', 'https://wordpress-1633295-6507153.cloudwaysapps.com/wp-content/uploads/2026/04/Copy-of-Infometry-32.mp4' );

$problems = array(
	array( 'icon' => 'gauge', 'title' => 'Too many dashboards', 'copy' => 'Teams struggle to find the right view or build the right report.' ),
	array( 'icon' => 'chart', 'title' => 'Slow time to insights', 'copy' => 'IT bottlenecks and manual queries delay critical decisions.' ),
	array( 'icon' => 'bolt', 'title' => 'Complex tools', 'copy' => 'Powerful platforms, but hard for non-technical users.' ),
	array( 'icon' => 'shield', 'title' => 'Untrusted answers', 'copy' => 'Inconsistent metrics and siloed data erode trust.' ),
);

$capabilities = array(
	array( 'icon' => 'chat', 'class' => 'is-natural-language', 'kicker' => 'Conversational Analytics', 'title' => 'Natural Language Analytics', 'copy' => 'Ask complex business questions in plain English and receive accurate, governed answers instantly.', 'benefits' => array( 'Understand business intent', 'Answer follow-up questions', 'Deliver governed responses' ), 'tags' => array( 'Natural Language', 'Instant Answers' ) ),
	array( 'icon' => 'brain', 'class' => 'is-ai-insights', 'kicker' => 'AI Intelligence', 'title' => 'AI-Powered Insights', 'copy' => 'Summarize performance, explain key drivers, and automatically surface the insights that matter most.', 'benefits' => array( 'Summarize key changes', 'Explain root causes', 'Recommend next actions' ), 'tags' => array( 'Smart Summary', 'Root Cause' ) ),
	array( 'icon' => 'nodes', 'class' => 'is-connectivity', 'kicker' => 'Unified Data', 'title' => 'Enterprise Data Connectivity', 'copy' => 'Connect securely to warehouses, data lakes, databases, and business applications across your ecosystem.', 'benefits' => array( 'Connect multiple sources', 'Query live enterprise data', 'Scale across platforms' ), 'tags' => array( 'Multi-Source', 'Live Data' ) ),
	array( 'icon' => 'lock', 'class' => 'is-governance', 'kicker' => 'Trusted Governance', 'title' => 'Semantic Layer & Governance', 'copy' => 'Standardize business definitions, permissions, and metrics so every team works from trusted answers.', 'benefits' => array( 'Standardize business metrics', 'Apply role-based access', 'Maintain trusted definitions' ), 'tags' => array( 'Governed Metrics', 'Role Access' ) ),
	array( 'icon' => 'spark', 'class' => 'is-visuals', 'kicker' => 'Visual Exploration', 'title' => 'Interactive Visualizations', 'copy' => 'Turn every answer into clear charts, trends, and drill-down views built for faster business exploration.', 'benefits' => array( 'Generate clear visuals', 'Explore trends interactively', 'Drill into business drivers' ), 'tags' => array( 'Dynamic Charts', 'Drill Down' ) ),
	array( 'icon' => 'eye', 'class' => 'is-sql', 'kicker' => 'Explainable Analytics', 'title' => 'SQL Transparency', 'copy' => 'Inspect the generated SQL behind every answer for complete visibility, validation, and enterprise control.', 'benefits' => array( 'Inspect generated SQL', 'Validate every answer', 'Support audit readiness' ), 'tags' => array( 'Visible SQL', 'Audit Ready' ) ),
	array( 'icon' => 'monitor', 'class' => 'is-monitoring', 'kicker' => 'Proactive Intelligence', 'title' => 'Alerts & Monitoring', 'copy' => 'Monitor critical KPIs, detect meaningful changes, and notify teams before business issues escalate.', 'benefits' => array( 'Track critical KPIs', 'Detect meaningful changes', 'Notify teams proactively' ), 'tags' => array( 'Smart Alerts', 'KPI Watch' ) ),
	array( 'icon' => 'api', 'class' => 'is-automation', 'kicker' => 'Embedded Analytics', 'title' => 'APIs & Automation', 'copy' => 'Embed governed intelligence into applications and automate repeatable decisions across business workflows.', 'benefits' => array( 'Embed secure analytics', 'Automate repeatable actions', 'Integrate business workflows' ), 'tags' => array( 'Secure APIs', 'Workflows' ) ),
);

$steps = array(
	array( 'icon' => 'chat', 'title' => '1. Ask', 'copy' => 'Ask a business question in plain English.' ),
	array( 'icon' => 'database', 'title' => '2. Understand', 'copy' => 'AI understands your intent and analyzes the data.' ),
	array( 'icon' => 'chart', 'title' => '3. Answer', 'copy' => 'Get accurate insights with visuals and explanations.' ),
	array( 'icon' => 'check', 'title' => '4. Act', 'copy' => 'Use insights to drive decisions and outcomes.' ),
);

$outcomes = array(
	array( 'icon' => 'bank', 'stat' => '3X', 'copy' => 'Faster time to insight' ),
	array( 'icon' => 'trend', 'stat' => '75%', 'copy' => 'Increase in self-service analytics' ),
	array( 'icon' => 'path', 'stat' => '2X', 'copy' => 'Productivity boost for data teams' ),
	array( 'icon' => 'trust', 'stat' => '92%+', 'copy' => 'Trusted answers and user satisfaction' ),
);

$personas = array(
	array( 'icon' => 'executive', 'class' => 'is-executive', 'title' => 'Executives', 'copy' => 'Track business performance, uncover critical drivers, and make confident strategic decisions in real time.', 'benefits' => array( 'Monitor enterprise KPIs', 'Explain performance changes', 'Act on trusted recommendations' ), 'tags' => array( 'Executive KPIs', 'Decision Intelligence' ) ),
	array( 'icon' => 'users', 'class' => 'is-business-user', 'title' => 'Business Users', 'copy' => 'Explore trusted enterprise data in everyday language without waiting for dashboards or technical support.', 'benefits' => array( 'Ask questions naturally', 'Get instant governed answers', 'Share insight-rich storybooks' ), 'tags' => array( 'Self-Service', 'Instant Answers' ) ),
	array( 'icon' => 'analyst', 'class' => 'is-data-analyst', 'title' => 'Data Analysts', 'copy' => 'Move from questions to deeper analysis with transparent SQL, interactive visuals, and explainable insights.', 'benefits' => array( 'Inspect generated SQL', 'Explore trends and anomalies', 'Build reusable analysis flows' ), 'tags' => array( 'Deep Analysis', 'SQL Visibility' ) ),
	array( 'icon' => 'finance', 'class' => 'is-finance-team', 'title' => 'Finance Teams', 'copy' => 'Analyze performance, explain variance, monitor cash flow, and forecast business outcomes with speed.', 'benefits' => array( 'Analyze budget variance', 'Track financial performance', 'Accelerate planning cycles' ), 'tags' => array( 'Variance Analysis', 'Forecasting' ) ),
	array( 'icon' => 'it', 'class' => 'is-it-data', 'title' => 'IT & Data Teams', 'copy' => 'Deliver secure, governed analytics while maintaining permissions, metric consistency, and platform reliability.', 'benefits' => array( 'Enforce data permissions', 'Govern metrics and models', 'Monitor secure AI access' ), 'tags' => array( 'Data Governance', 'Enterprise Security' ) ),
);

$supported_llms = array(
	array( 'name' => 'OpenAI', 'file' => 'llm-openai.png' ),
	array( 'name' => 'Llama', 'file' => 'llm-llama.png' ),
	array( 'name' => 'Vertex AI', 'file' => 'llm-vertex-ai.png' ),
	array( 'name' => 'Gemini', 'file' => 'llm-gemini.png' ),
	array( 'name' => 'Claude', 'file' => 'llm-claude.png' ),
	array( 'name' => 'Mistral AI', 'file' => 'llm-mistral-ai.png' ),
);

$comparison_rows = array(
	array( 'capability' => 'Natural Language Query', 'conversa' => 'yes', 'tableau' => 'partial', 'powerbi' => 'partial', 'ai' => 'yes' ),
	array( 'capability' => 'Automated Insights', 'conversa' => 'yes', 'tableau' => 'no', 'powerbi' => 'no', 'ai' => 'partial' ),
	array( 'capability' => 'Root Cause Analysis', 'conversa' => 'yes', 'tableau' => 'no', 'powerbi' => 'no', 'ai' => 'yes' ),
	array( 'capability' => 'Predictive Analytics', 'conversa' => 'partial', 'tableau' => 'partial', 'powerbi' => 'no', 'ai' => 'yes' ),
	array( 'capability' => 'Semantic Layer', 'conversa' => 'yes', 'tableau' => 'no', 'powerbi' => 'partial', 'ai' => 'no' ),
	array( 'capability' => 'SQL Transparency', 'conversa' => 'yes', 'tableau' => 'no', 'powerbi' => 'no', 'ai' => 'partial' ),
	array( 'capability' => 'Multi Data Sources', 'conversa' => 'yes', 'tableau' => 'yes', 'powerbi' => 'yes', 'ai' => 'partial' ),
	array( 'capability' => 'Unstructured Data', 'conversa' => 'yes', 'tableau' => 'no', 'powerbi' => 'no', 'ai' => 'partial' ),
	array( 'capability' => 'Narrative Summaries', 'conversa' => 'yes', 'tableau' => 'no', 'powerbi' => 'partial', 'ai' => 'partial' ),
	array( 'capability' => 'Governance', 'conversa' => 'yes', 'tableau' => 'yes', 'powerbi' => 'yes', 'ai' => 'partial' ),
	array( 'capability' => 'Custom UI', 'conversa' => 'yes', 'tableau' => 'no', 'powerbi' => 'no', 'ai' => 'no' ),
);

$pricing_plans = array(
	array(
		'name'     => 'Advanced',
		'price'    => '$60,000',
		'period'   => '/ year',
		'featured' => false,
		'features' => array( '5 Users', 'Annual Subscription', 'Conversational Analytics', 'Semantic Model Framework', 'Limited Multi-LLM Support', '2 Data Sources', 'Standard Support' ),
	),
	array(
		'name'     => 'Professional',
		'price'    => '$100,000',
		'period'   => '/ year',
		'featured' => true,
		'features' => array( '10 Users', 'Annual Subscription', 'Conversational Analytics', 'Semantic Model Framework', 'Expanded Multi-LLM Support', '5 Data Sources', 'Priority Support' ),
	),
	array(
		'name'     => 'Enterprise',
		'price'    => 'Talk To Sales',
		'period'   => '',
		'featured' => false,
		'features' => array( '10+ Users', 'Annual Subscription', 'Conversational Analytics', 'Semantic Model Framework', 'Expanded Multi-LLM Support', 'Custom Data Sources', 'Dedicated Support' ),
	),
);

$customer_logos = array(
	array( 'name' => 'Sanofi', 'file' => 'customer-sanofi-logo.png' ),
	array( 'name' => 'Belk', 'file' => 'customer-belk-logo.png' ),
	array( 'name' => 'IBM', 'file' => 'customer-ibm-logo.png' ),
	array( 'name' => 'Informatica', 'file' => 'customer-informatica-logo.png' ),
	array( 'name' => 'Michaels', 'file' => 'customer-michaels-logo.png' ),
	array( 'name' => 'SanDisk', 'file' => 'customer-sandisk-logo.png' ),
	array( 'name' => 'Fusion.io', 'file' => 'customer-fusionio-logo.png' ),
	array( 'name' => 'Adaptive Insights', 'file' => 'customer-adaptive-insights-logo.png' ),
	array( 'name' => 'Asana', 'file' => 'customer-asana-logo.png' ),
);

$faqs = array(
	array( 'question' => 'What is a conversational analytics platform?', 'answer' => 'It is an AI-driven analytics system that lets users ask data questions in everyday language and immediately get governed answers without dashboards or manual SQL.' ),
	array( 'question' => 'How does a conversational analytics platform work?', 'answer' => 'It understands intent with natural language processing, maps the question to a governed semantic model, runs optimized queries on connected data, and returns charts, numbers, and plain-English summaries.' ),
	array( 'question' => 'Is Conversa secure?', 'answer' => 'Yes. Conversa is designed for enterprise security with role-based access, governed definitions, auditability, and query execution against approved enterprise data sources.' ),
	array( 'question' => 'What data sources does Conversa support?', 'answer' => 'Conversa can connect to modern cloud and hybrid data platforms including Snowflake, BigQuery, Redshift, Azure Synapse, Oracle, PostgreSQL, SQL Server, and similar structured data stores.' ),
	array( 'question' => 'Can conversational analytics handle complex business questions?', 'answer' => 'Yes. It can support multi-step, business-specific questions and follow-up analysis grounded in live enterprise data and semantic definitions.' ),
	array( 'question' => 'Does conversational analytics respect role-based access?', 'answer' => 'Yes. Users only see the data they are authorized to access, with permissions aligned to enterprise security policies.' ),
	array( 'question' => 'Can conversational analytics replace dashboards?', 'answer' => 'It complements dashboards. Dashboards remain useful for recurring monitoring, while Conversa helps users investigate new questions and explore data faster.' ),
	array( 'question' => 'What makes INFOFISCUS Conversa different?', 'answer' => 'Conversa combines natural language queries, direct warehouse access, semantic governance, SQL transparency, document intelligence, and business-friendly answers in one enterprise platform.' ),
);

$other_products = array(
	array( 'icon' => 'nodes', 'title' => 'Informatica Connectors', 'copy' => 'Pre-built, no-code connectors for fast, secure, and scalable data movement across enterprise systems.' ),
	array( 'icon' => 'database', 'title' => 'INFOFISCUS Snowflake Native Apps', 'copy' => 'Native Snowflake applications that accelerate analytics, integration, and operational reporting.' ),
	array( 'icon' => 'chart', 'title' => 'Pre-Built Analytics Apps', 'copy' => 'Ready-to-use analytics solutions for IDMC and Matillion that reduce implementation time.' ),
);
?>

<main class="infometry-conversa-product" id="infometry-conversa-product">
	<svg class="icp-icon-sprite" aria-hidden="true" focusable="false">
		<symbol id="icp-i-chat" viewBox="0 0 24 24"><path d="M5 4h14a3 3 0 0 1 3 3v7a3 3 0 0 1-3 3h-7l-5 4v-4H5a3 3 0 0 1-3-3V7a3 3 0 0 1 3-3Z"/><path d="M8 10.5h.01M12 10.5h.01M16 10.5h.01"/></symbol>
		<symbol id="icp-i-chart" viewBox="0 0 24 24"><path d="M4 19V5M4 19h16"/><path d="m7 15 4-4 3 3 5-7"/><path d="M18 7h1v5"/></symbol>
		<symbol id="icp-i-shield" viewBox="0 0 24 24"><path d="M12 2 4 5v6c0 5 3 9 8 11 5-2 8-6 8-11V5l-8-3Z"/><path d="m8 12 3 3 5-6"/></symbol>
		<symbol id="icp-i-brain" viewBox="0 0 24 24"><path d="M9 3a4 4 0 0 0-4 4v1a4 4 0 0 0 0 8v1a4 4 0 0 0 7 2.6A4 4 0 0 0 19 17v-1a4 4 0 0 0 0-8V7a4 4 0 0 0-7-2.6A4 4 0 0 0 9 3Z"/><path d="M12 4v16M7 8h3M14 9h3"/></symbol>
		<symbol id="icp-i-gauge" viewBox="0 0 24 24"><path d="M4 14a8 8 0 1 1 16 0"/><path d="m12 14 4-4"/><path d="M7 18h10"/></symbol>
		<symbol id="icp-i-bolt" viewBox="0 0 24 24"><path d="m13 2-9 12h7l-1 8 10-13h-7l0-7Z"/></symbol>
		<symbol id="icp-i-nodes" viewBox="0 0 24 24"><circle cx="6" cy="6" r="3"/><circle cx="18" cy="6" r="3"/><circle cx="12" cy="18" r="3"/><path d="M8.5 7.5 11 15M15.5 7.5 13 15"/></symbol>
		<symbol id="icp-i-lock" viewBox="0 0 24 24"><rect x="5" y="10" width="14" height="10" rx="2"/><path d="M8 10V7a4 4 0 0 1 8 0v3"/></symbol>
		<symbol id="icp-i-spark" viewBox="0 0 24 24"><path d="M12 2v6M12 16v6M4.9 4.9l4.2 4.2M14.9 14.9l4.2 4.2M2 12h6M16 12h6M4.9 19.1l4.2-4.2M14.9 9.1l4.2-4.2"/></symbol>
		<symbol id="icp-i-eye" viewBox="0 0 24 24"><path d="M2 12s4-7 10-7 10 7 10 7-4 7-10 7S2 12 2 12Z"/><circle cx="12" cy="12" r="3"/></symbol>
		<symbol id="icp-i-monitor" viewBox="0 0 24 24"><rect x="3" y="4" width="18" height="13" rx="2"/><path d="M8 21h8M12 17v4"/></symbol>
		<symbol id="icp-i-api" viewBox="0 0 24 24"><path d="M8 9 5 12l3 3M16 9l3 3-3 3M13 5l-2 14"/></symbol>
		<symbol id="icp-i-database" viewBox="0 0 24 24"><ellipse cx="12" cy="5" rx="7" ry="3"/><path d="M5 5v6c0 1.7 3.1 3 7 3s7-1.3 7-3V5M5 11v6c0 1.7 3.1 3 7 3s7-1.3 7-3v-6"/></symbol>
		<symbol id="icp-i-check" viewBox="0 0 24 24"><circle cx="12" cy="12" r="9"/><path d="m8 12 3 3 5-6"/></symbol>
		<symbol id="icp-i-bank" viewBox="0 0 24 24"><path d="m3 10 9-6 9 6H3Z"/><path d="M5 10v8M9 10v8M15 10v8M19 10v8M3 18h18"/></symbol>
		<symbol id="icp-i-trend" viewBox="0 0 24 24"><path d="M4 19V5M4 19h16"/><path d="m7 15 4-4 3 3 5-7"/></symbol>
		<symbol id="icp-i-path" viewBox="0 0 24 24"><path d="M4 17c4 0 3-10 8-10s4 10 8 10"/><circle cx="4" cy="17" r="2"/><circle cx="12" cy="7" r="2"/><circle cx="20" cy="17" r="2"/></symbol>
		<symbol id="icp-i-trust" viewBox="0 0 24 24"><path d="M12 2 4 5v6c0 5 3 9 8 11 5-2 8-6 8-11V5l-8-3Z"/><path d="m8 12 3 3 5-6"/></symbol>
		<symbol id="icp-i-executive" viewBox="0 0 24 24"><path d="M4 19V5M4 19h16"/><path d="M8 16v-5M12 16V8M16 16v-8"/></symbol>
		<symbol id="icp-i-users" viewBox="0 0 24 24"><path d="M16 11a4 4 0 1 0-8 0"/><path d="M4 21a8 8 0 0 1 16 0"/><path d="M20 8a3 3 0 0 1 2 5M4 8a3 3 0 0 0-2 5"/></symbol>
		<symbol id="icp-i-analyst" viewBox="0 0 24 24"><path d="M5 19V5h14v14H5Z"/><path d="M8 15h2v2H8zM11 11h2v6h-2zM14 8h2v9h-2z"/></symbol>
		<symbol id="icp-i-finance" viewBox="0 0 24 24"><path d="M4 12h16M7 8h10M8 16h8"/><path d="m12 3 8 5H4l8-5Z"/></symbol>
		<symbol id="icp-i-it" viewBox="0 0 24 24"><path d="M12 3v4M12 17v4M4 12h4M16 12h4"/><circle cx="12" cy="12" r="5"/></symbol>
	</svg>

	<section class="icp-hero" aria-labelledby="icp-hero-title">
		<div class="icp-shell">
			<div class="icp-hero-grid">
				<div class="icp-hero-copy">
					<p class="icp-eyebrow">Conversation Analytics Platform for Enterprise</p>
					<h1 id="icp-hero-title">Ask Anything.<br>Get Insights.<br><span>Drive Results.</span></h1>
					<p class="icp-hero-text">INFOFISCUS Conversa gives every team instant, governed answers from enterprise data—no SQL, no dashboard bottlenecks.</p>
					<div class="icp-actions">
						<a class="icp-button icp-button-primary" href="<?php echo esc_url( $demo_url ); ?>">Request a Demo <span aria-hidden="true">→</span></a>
						<a class="icp-button icp-button-secondary" href="#icp-intro"><span class="icp-play-dot">▶</span> Watch Product Tour</a>
					</div>
					<div class="icp-hero-icons" aria-label="Conversa platform strengths">
						<span><svg aria-hidden="true"><use href="#icp-i-chat"></use></svg>Natural Language</span>
						<span><svg aria-hidden="true"><use href="#icp-i-spark"></use></svg>Instant Insights</span>
						<span><svg aria-hidden="true"><use href="#icp-i-shield"></use></svg>Enterprise-Grade Security</span>
						<span><svg aria-hidden="true"><use href="#icp-i-target"></use></svg>Actionable Recommendations</span>
					</div>
				</div>

				<div class="icp-hero-slider" data-icp-hero-slider aria-label="INFOFISCUS Conversa product preview carousel">
					<figure class="icp-hero-slide is-active"><img src="<?php echo esc_url( INFOMETRY_PT_URL . 'assets/images/conversa-home-1.png' ); ?>" alt="INFOFISCUS Conversa home dashboard"></figure>
					<figure class="icp-hero-slide"><img src="<?php echo esc_url( INFOMETRY_PT_URL . 'assets/images/conversa-storybooks-1.png' ); ?>" alt="INFOFISCUS Conversa storybooks dashboard"></figure>
					<figure class="icp-hero-slide"><img src="<?php echo esc_url( INFOMETRY_PT_URL . 'assets/images/conversa-connections-1.png' ); ?>" alt="INFOFISCUS Conversa connections dashboard"></figure>
				</div>

				<div class="icp-dashboard icp-dashboard-legacy" aria-hidden="true">
					<aside class="icp-dashboard-rail" aria-hidden="true">
						<span class="icp-rail-menu"></span>
						<span class="is-active"><svg><use href="#icp-i-analyst"></use></svg></span>
						<span><svg><use href="#icp-i-spark"></use></svg></span>
						<span><svg><use href="#icp-i-monitor"></use></svg></span>
						<span><svg><use href="#icp-i-eye"></use></svg></span>
						<span><svg><use href="#icp-i-gauge"></use></svg></span>
					</aside>
					<div class="icp-dashboard-stage">
						<div class="icp-dashboard-head">
							<img src="<?php echo esc_url( INFOMETRY_PT_URL . 'assets/images/infofiscus-conversa-logo.png' ); ?>" alt="INFOFISCUS Conversa">
							<span aria-hidden="true">...</span>
						</div>
						<div class="icp-chat-question">Why did revenue decline in the Western Region this quarter?</div>
						<div class="icp-ai-orb">AI</div>
						<div class="icp-answer-card">Revenue declined by 12% in the Western Region primarily due to stockouts in key products and lower repeat purchases.</div>
						<div class="icp-dashboard-cards">
							<article class="icp-revenue-card">
								<h3>Revenue Change</h3>
								<strong>-12%</strong>
								<span>vs Last Quarter</span>
								<div class="icp-revenue-line" aria-hidden="true">
									<svg viewBox="0 0 180 78" focusable="false">
										<path class="icp-chart-area" d="M8 62 L38 48 L68 54 L100 34 L132 42 L172 16 L172 72 L8 72 Z"></path>
										<path class="icp-chart-line" d="M8 62 L38 48 L68 54 L100 34 L132 42 L172 16"></path>
										<g class="icp-chart-points">
											<circle cx="8" cy="62" r="3"></circle>
											<circle cx="38" cy="48" r="3"></circle>
											<circle cx="68" cy="54" r="3"></circle>
											<circle cx="100" cy="34" r="3"></circle>
											<circle cx="132" cy="42" r="3"></circle>
											<circle cx="172" cy="16" r="3"></circle>
										</g>
									</svg>
								</div>
							</article>
							<article class="icp-impact-card">
								<h3>Impact by Category</h3>
								<div class="icp-impact-donut" aria-hidden="true"></div>
								<ul>
									<li><span></span>Stockouts <strong>48%</strong></li>
									<li><span></span>Repeat Purchases <strong>32%</strong></li>
									<li><span></span>Pricing <strong>20%</strong></li>
								</ul>
							</article>
							<article class="icp-recommend-card">
								<h3>Top Recommendations</h3>
								<ul>
									<li>Improve inventory availability</li>
									<li>Boost customer retention</li>
									<li>Optimize promotions</li>
								</ul>
							</article>
						</div>
						<div class="icp-dashboard-input"><span>Ask another question...</span><button type="button" aria-label="Send sample prompt">▶</button></div>
					</div>
					<div class="icp-dashboard-top">
						<strong>Conversa</strong>
						<div><span>Sales Overview</span><span>Filters</span></div>
					</div>
					<div class="icp-question-card">
						<label>Ask a question</label>
						<p>What was total revenue last quarter?</p>
						<button type="button" aria-label="Submit sample question">+</button>
					</div>
					<div class="icp-kpi-row">
						<article><span>Total Revenue</span><strong>$124.6M</strong><small>↑ 16.8%</small></article>
						<article><span>Total Orders</span><strong>18,732</strong><small>↑ 12.4%</small></article>
						<article><span>Avg Order Value</span><strong>$664</strong><small>↑ 6.2%</small></article>
					</div>
					<div class="icp-dash-grid">
						<article class="icp-sql-card"><span>Generated SQL</span><code>SELECT SUM(revenue)<br>FROM fact_sales<br>WHERE quarter = 'Q1-2024';</code><small>● Run</small></article>
						<article class="icp-line-card"><span>Revenue Over Time</span><div class="icp-line-chart"><i></i></div></article>
						<article class="icp-insight-card"><span>AI Insight</span><p>Total revenue in Q1-2024 was <strong>$124.6M</strong>, up <strong>16.8%</strong> vs Q4-2023.</p></article>
						<article class="icp-donut-card"><span>Revenue Over Channel</span><div class="icp-donut"></div></article>
						<article class="icp-bars-card"><span>Top Regions by Revenue</span><div class="icp-bars"><i></i><i></i><i></i><i></i></div></article>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="icp-hero-strip" aria-label="Enterprise outcomes and supported LLMs">
		<div class="icp-shell icp-hero-strip-inner">
			<div class="icp-strip-stats" aria-label="Enterprise outcomes">
				<?php foreach ( $outcomes as $outcome ) : ?>
					<div class="icp-strip-stat"><strong data-icp-count="<?php echo esc_attr( preg_replace( '/[^0-9.]/', '', $outcome['stat'] ) ); ?>" data-icp-suffix="<?php echo esc_attr( preg_replace( '/[0-9.]/', '', $outcome['stat'] ) ); ?>"><?php echo esc_html( $outcome['stat'] ); ?></strong><span><?php echo esc_html( $outcome['copy'] ); ?></span></div>
				<?php endforeach; ?>
			</div>
			<div class="icp-llm-panel"><span class="icp-strip-heading">LLMs Supported</span><div class="icp-llm-list" aria-label="Supported large language models">
				<?php foreach ( $supported_llms as $llm ) : ?><span><img src="<?php echo esc_url( INFOMETRY_PT_URL . 'assets/images/' . $llm['file'] ); ?>" alt="<?php echo esc_attr( $llm['name'] ); ?> logo"></span><?php endforeach; ?>
				<?php foreach ( $supported_llms as $llm ) : ?><span aria-hidden="true"><img src="<?php echo esc_url( INFOMETRY_PT_URL . 'assets/images/' . $llm['file'] ); ?>" alt=""></span><?php endforeach; ?>
			</div></div>
		</div>
	</section>

	<section class="icp-intro" id="icp-intro" aria-labelledby="icp-intro-title">
		<div class="icp-shell icp-intro-grid">
			<div class="icp-intro-showcase-head"><p class="icp-kicker">Meet INFOFISCUS Conversa</p><h2 id="icp-intro-title">See the answer. Understand the why. Act with confidence.</h2><p>Ask questions in everyday language and turn complex enterprise data into clear, governed insights your teams can trust and act on.</p></div>
			<div class="icp-intro-video-frame"><div class="icp-intro-video-bar"><span><i></i><i></i><i></i></span><strong>Conversa Product Experience</strong><small>Interactive analytics</small></div><video autoplay muted loop playsinline preload="metadata" poster="<?php echo esc_url( INFOMETRY_PT_URL . 'assets/images/conversa-ai-hero-original.png' ); ?>" aria-label="INFOFISCUS Conversa product tour animation"><source src="<?php echo esc_url( $intro_video ); ?>" type="video/mp4"></video><div class="icp-intro-video-badge"><svg><use href="#icp-i-spark"></use></svg><span><small>From question to insight</small><strong>Powered by governed enterprise data</strong></span></div></div>
			<div class="icp-intro-value-row"><article><span><svg><use href="#icp-i-chat"></use></svg></span><div><strong>Ask naturally</strong><small>Explore data naturally—no SQL, complex reports, or dashboards.</small></div></article><article><span><svg><use href="#icp-i-trust"></use></svg></span><div><strong>Get governed answers</strong><small>Trusted answers with consistent metrics and secure permissions.</small></div></article><article><span><svg><use href="#icp-i-trend"></use></svg></span><div><strong>Move to action</strong><small>See key drivers and turn insights into confident next steps.</small></div></article></div>
		</div>
	</section>

	<section class="icp-problem" aria-labelledby="icp-problem-title">
		<div class="icp-shell">
			<div class="icp-section-heading icp-center">
				<h2 id="icp-problem-title">The Problem</h2>
				<p>Data is everywhere. Answers aren't.</p>
			</div>
			<div class="icp-card-grid icp-four">
				<?php foreach ( $problems as $problem ) : ?>
					<article class="icp-soft-card">
						<span class="icp-icon"><svg><use href="#icp-i-<?php echo esc_attr( $problem['icon'] ); ?>"></use></svg></span>
						<h3><?php echo esc_html( $problem['title'] ); ?></h3>
						<p><?php echo esc_html( $problem['copy'] ); ?></p>
					</article>
				<?php endforeach; ?>
			</div>
		</div>
	</section>

	<section class="icp-capabilities" id="icp-capabilities" aria-labelledby="icp-capabilities-title">
		<div class="icp-shell">
			<div class="icp-section-heading icp-center">
				<h2 id="icp-capabilities-title">Platform Capabilities</h2>
				<p>Everything you need to turn questions into business outcomes.</p>
			</div>
			<div class="icp-capability-carousel" aria-label="Platform capabilities carousel">
				<div class="icp-card-grid icp-capability-grid">
					<?php foreach ( $capabilities as $capability ) : ?>
						<article class="icp-feature-card <?php echo esc_attr( $capability['class'] ); ?>">
							<span class="icp-icon"><svg><use href="#icp-i-<?php echo esc_attr( $capability['icon'] ); ?>"></use></svg></span>
							<span class="icp-feature-kicker"><?php echo esc_html( $capability['kicker'] ); ?></span>
							<h3><?php echo esc_html( $capability['title'] ); ?></h3>
							<p><?php echo esc_html( $capability['copy'] ); ?></p>
							<ul class="icp-feature-benefits"><?php foreach ( $capability['benefits'] as $benefit ) : ?><li><?php echo esc_html( $benefit ); ?></li><?php endforeach; ?></ul>
							<div class="icp-feature-tags"><?php foreach ( $capability['tags'] as $tag ) : ?><span><?php echo esc_html( $tag ); ?></span><?php endforeach; ?></div>
						</article>
					<?php endforeach; ?>
					<?php foreach ( $capabilities as $capability ) : ?>
						<article class="icp-feature-card <?php echo esc_attr( $capability['class'] ); ?>" aria-hidden="true">
							<span class="icp-icon"><svg><use href="#icp-i-<?php echo esc_attr( $capability['icon'] ); ?>"></use></svg></span>
							<span class="icp-feature-kicker"><?php echo esc_html( $capability['kicker'] ); ?></span>
							<h3><?php echo esc_html( $capability['title'] ); ?></h3>
							<p><?php echo esc_html( $capability['copy'] ); ?></p>
							<ul class="icp-feature-benefits"><?php foreach ( $capability['benefits'] as $benefit ) : ?><li><?php echo esc_html( $benefit ); ?></li><?php endforeach; ?></ul>
							<div class="icp-feature-tags"><?php foreach ( $capability['tags'] as $tag ) : ?><span><?php echo esc_html( $tag ); ?></span><?php endforeach; ?></div>
						</article>
					<?php endforeach; ?>
				</div>
			</div>
		</div>
	</section>

	<section class="icp-workflow" id="icp-workflow" aria-labelledby="icp-workflow-title">
		<div class="icp-shell">
			<h2 id="icp-workflow-title">How INFOFISCUS Conversa Works</h2>
			<div class="icp-workflow-row">
				<?php foreach ( $steps as $step ) : ?>
					<article>
						<span class="icp-step-icon"><svg><use href="#icp-i-<?php echo esc_attr( $step['icon'] ); ?>"></use></svg></span>
						<h3><?php echo esc_html( $step['title'] ); ?></h3>
						<p><?php echo esc_html( $step['copy'] ); ?></p>
					</article>
				<?php endforeach; ?>
			</div>
		</div>
	</section>

	<section class="icp-outcomes" aria-labelledby="icp-outcomes-title">
		<div class="icp-shell">
			<div class="icp-section-heading icp-center">
				<h2 id="icp-outcomes-title">Enterprise Outcomes</h2>
				<p>Delivered for leading organizations.</p>
			</div>
			<div class="icp-card-grid icp-four">
				<?php foreach ( $outcomes as $outcome ) : ?>
					<article class="icp-outcome-card">
						<span class="icp-icon"><svg><use href="#icp-i-<?php echo esc_attr( $outcome['icon'] ); ?>"></use></svg></span>
						<strong data-icp-count="<?php echo esc_attr( preg_replace( '/[^0-9.]/', '', $outcome['stat'] ) ); ?>" data-icp-suffix="<?php echo esc_attr( preg_replace( '/[0-9.]/', '', $outcome['stat'] ) ); ?>"><?php echo esc_html( $outcome['stat'] ); ?></strong>
						<p><?php echo esc_html( $outcome['copy'] ); ?></p>
					</article>
				<?php endforeach; ?>
			</div>
		</div>
	</section>

	<section class="icp-outcome-journey" aria-labelledby="icp-outcome-journey-title">
		<div class="icp-shell">
			<div class="icp-journey-heading">
				<span>Enterprise transformation</span>
				<h2 id="icp-outcome-journey-title">The shift Conversa creates.</h2>
				<p>See how everyday analytics changes when trusted intelligence becomes accessible to every team.</p>
			</div>
			<div class="icp-shift-board">
				<div class="icp-shift-labels"><span>Before Conversa</span><span>Transformation</span><span>With Conversa</span></div>
				<div class="icp-shift-row"><article class="icp-shift-problem"><span><svg><use href="#icp-i-monitor"></use></svg></span><div><small>Manual analytics</small><h3>Dashboard dependency</h3><p>Teams wait for the right report or view.</p></div></article><div class="icp-shift-flow" aria-hidden="true"><i></i><b>→</b></div><article class="icp-shift-result"><span><svg><use href="#icp-i-chat"></use></svg></span><div><small>Natural exploration</small><h3>Questions become accessible</h3><p>Anyone can explore governed data naturally.</p></div></article></div>
				<div class="icp-shift-row"><article class="icp-shift-problem"><span><svg><use href="#icp-i-path"></use></svg></span><div><small>Fragmented answers</small><h3>Disconnected context</h3><p>Definitions and answers vary across teams.</p></div></article><div class="icp-shift-flow" aria-hidden="true"><i></i><b>→</b></div><article class="icp-shift-result"><span><svg><use href="#icp-i-eye"></use></svg></span><div><small>Explainable intelligence</small><h3>Answers arrive with context</h3><p>Every insight is clear, explainable, and useful.</p></div></article></div>
				<div class="icp-shift-row"><article class="icp-shift-problem"><span><svg><use href="#icp-i-database"></use></svg></span><div><small>Specialist dependent</small><h3>Technical bottlenecks</h3><p>Every new question returns to the data team.</p></div></article><div class="icp-shift-flow" aria-hidden="true"><i></i><b>→</b></div><article class="icp-shift-result"><span><svg><use href="#icp-i-users"></use></svg></span><div><small>Shared metrics</small><h3>Teams align around truth</h3><p>Governed definitions keep decisions consistent.</p></div></article></div>
				<div class="icp-shift-row"><article class="icp-shift-problem"><span><svg><use href="#icp-i-gauge"></use></svg></span><div><small>Slow decisions</small><h3>Decision uncertainty</h3><p>Delayed answers weaken confidence and action.</p></div></article><div class="icp-shift-flow" aria-hidden="true"><i></i><b>→</b></div><article class="icp-shift-result"><span><svg><use href="#icp-i-trust"></use></svg></span><div><small>Trusted action</small><h3>Action moves with confidence</h3><p>Trusted intelligence supports the next best step.</p></div></article></div>
			</div>
		</div>
	</section>

	<section class="icp-use-cases" id="icp-use-cases" aria-labelledby="icp-use-cases-title">
		<div class="icp-shell">
			<div class="icp-section-heading icp-center">
				<h2 id="icp-use-cases-title">Industry Use Cases</h2>
			</div>
			<div class="icp-use-case-panel" data-icp-use-cases>
				<div class="icp-tabs" aria-label="Industry tabs">
					<button class="is-active" type="button" data-icp-use-tab="finance">Finance</button>
					<button type="button" data-icp-use-tab="sales">Sales</button>
					<button type="button" data-icp-use-tab="operations">Operations</button>
					<button type="button" data-icp-use-tab="marketing">Marketing</button>
					<button type="button" data-icp-use-tab="hr">HR</button>
				</div>
				<div class="icp-use-panel is-active" data-icp-use-panel="finance">
					<div class="icp-finance-copy">
						<span class="icp-use-icon"><svg><use href="#icp-i-bank"></use></svg></span>
						<h3>Finance</h3>
						<p>Monitor performance, analyze variance, and forecast with confidence.</p>
						<ul><li>P&L and balance sheet insights</li><li>Cash flow and working capital analysis</li><li>Budget vs actuals and forecasting</li></ul>
					</div>
					<div class="icp-finance-chart"><h4>Net Profit Trend</h4><div class="icp-chart-card-line" data-chart="finance"></div></div>
					<div class="icp-finance-kpis"><article><span>Gross Margin</span><strong>31.6%</strong><small>Up 4.2% vs Prior Period</small></article><article><span>EBITDA</span><strong>$34.2M</strong><small>Up 12.7% vs Prior Period</small></article></div>
				</div>
				<div class="icp-use-panel" data-icp-use-panel="sales">
					<div class="icp-finance-copy">
						<span class="icp-use-icon"><svg><use href="#icp-i-chart"></use></svg></span>
						<h3>Sales</h3>
						<p>Track pipeline, conversion quality, and regional performance in real time.</p>
						<ul><li>Pipeline health and win-rate trends</li><li>Revenue by region and channel</li><li>Account risk and next-best actions</li></ul>
					</div>
					<div class="icp-finance-chart"><h4>Pipeline Conversion</h4><div class="icp-chart-card-line" data-chart="sales"></div></div>
					<div class="icp-finance-kpis"><article><span>Win Rate</span><strong>42.8%</strong><small>Up 8.4% vs Prior Period</small></article><article><span>Pipeline</span><strong>$18.7M</strong><small>Up 15.1% vs Prior Period</small></article></div>
				</div>
				<div class="icp-use-panel" data-icp-use-panel="operations">
					<div class="icp-finance-copy">
						<span class="icp-use-icon"><svg><use href="#icp-i-nodes"></use></svg></span>
						<h3>Operations</h3>
						<p>Spot bottlenecks, forecast capacity, and improve delivery performance.</p>
						<ul><li>Inventory and fulfillment signals</li><li>Capacity and utilization analysis</li><li>Exception monitoring and alerts</li></ul>
					</div>
					<div class="icp-finance-chart"><h4>Fulfillment Efficiency</h4><div class="icp-chart-card-line" data-chart="operations"></div></div>
					<div class="icp-finance-kpis"><article><span>Cycle Time</span><strong>18%</strong><small>Improvement this quarter</small></article><article><span>On-Time SLA</span><strong>96.4%</strong><small>Up 5.8% vs Prior Period</small></article></div>
				</div>
				<div class="icp-use-panel" data-icp-use-panel="marketing">
					<div class="icp-finance-copy">
						<span class="icp-use-icon"><svg><use href="#icp-i-spark"></use></svg></span>
						<h3>Marketing</h3>
						<p>Understand campaign ROI, audience engagement, and funnel movement.</p>
						<ul><li>Campaign spend and return insights</li><li>Lead scoring and conversion paths</li><li>Audience segments and channel mix</li></ul>
					</div>
					<div class="icp-finance-chart"><h4>Campaign ROI</h4><div class="icp-chart-card-line" data-chart="marketing"></div></div>
					<div class="icp-finance-kpis"><article><span>MQL Growth</span><strong>28%</strong><small>Up 9.6% vs Prior Period</small></article><article><span>ROAS</span><strong>4.3X</strong><small>Up 13.2% vs Prior Period</small></article></div>
				</div>
				<div class="icp-use-panel" data-icp-use-panel="hr">
					<div class="icp-finance-copy">
						<span class="icp-use-icon"><svg><use href="#icp-i-users"></use></svg></span>
						<h3>HR</h3>
						<p>Analyze workforce trends, hiring velocity, and retention drivers.</p>
						<ul><li>Hiring funnel and time-to-fill</li><li>Attrition and engagement signals</li><li>Workforce planning and skills gaps</li></ul>
					</div>
					<div class="icp-finance-chart"><h4>Hiring Velocity</h4><div class="icp-chart-card-line" data-chart="hr"></div></div>
					<div class="icp-finance-kpis"><article><span>Time to Fill</span><strong>22%</strong><small>Faster than prior period</small></article><article><span>Retention</span><strong>91.8%</strong><small>Up 3.4% vs Prior Period</small></article></div>
				</div>
			</div>
		</div>
	</section>

	<section class="icp-personas" id="icp-personas" aria-labelledby="icp-personas-title">
		<div class="icp-shell">
			<div class="icp-section-heading icp-center">
				<span class="icp-persona-eyebrow">Built for Every Role</span>
				<h2 id="icp-personas-title">Empowering Every Team with Trusted Analytics</h2>
				<p>Role-ready insights, governed answers, and faster decisions across your enterprise.</p>
			</div>
			<div class="icp-card-grid icp-persona-grid">
				<?php foreach ( $personas as $persona ) : ?>
					<article class="icp-persona-card <?php echo esc_attr( $persona['class'] ); ?>">
						<span class="icp-icon"><svg><use href="#icp-i-<?php echo esc_attr( $persona['icon'] ); ?>"></use></svg></span>
						<h3><?php echo esc_html( $persona['title'] ); ?></h3>
						<p><?php echo esc_html( $persona['copy'] ); ?></p>
						<ul class="icp-persona-benefits"><?php foreach ( $persona['benefits'] as $benefit ) : ?><li><?php echo esc_html( $benefit ); ?></li><?php endforeach; ?></ul>
						<div class="icp-persona-tags"><?php foreach ( $persona['tags'] as $tag ) : ?><span><?php echo esc_html( $tag ); ?></span><?php endforeach; ?></div>
					</article>
				<?php endforeach; ?>
			</div>
		</div>
	</section>

	<section class="icp-comparison" id="icp-comparison" aria-labelledby="icp-comparison-title">
		<div class="icp-shell">
			<div class="icp-section-heading icp-center">
				<h2 id="icp-comparison-title">INFOFISCUS Conversa vs Other Conversational Analytics Platforms</h2>
				<p>See how enterprise conversational analytics compares across the capabilities teams ask for most.</p>
			</div>
			<div class="icp-comparison-table-wrap">
				<table class="icp-comparison-table">
					<thead>
						<tr>
							<th scope="col">Capabilities</th>
							<th scope="col"><span><img src="<?php echo esc_url( INFOMETRY_PT_URL . 'assets/images/infofiscus-conversa-table-logo.png' ); ?>" alt="INFOFISCUS Conversa"></span></th>
							<th scope="col">Tableau</th>
							<th scope="col">Power BI</th>
							<th scope="col">Modern AI Tools</th>
						</tr>
					</thead>
					<tbody>
						<?php foreach ( $comparison_rows as $row ) : ?>
							<tr>
								<th scope="row"><?php echo esc_html( $row['capability'] ); ?></th>
								<?php foreach ( array( 'conversa', 'tableau', 'powerbi', 'ai' ) as $column ) : ?>
									<?php
									$status       = $row[ $column ];
									$status_label = 'yes' === $status ? 'Included' : ( 'partial' === $status ? 'Partial' : 'Not included' );
									$status_text  = 'yes' === $status ? 'Yes' : ( 'partial' === $status ? 'Some' : 'No' );
									?>
									<td><span class="icp-status icp-status-<?php echo esc_attr( $status ); ?>" aria-label="<?php echo esc_attr( $status_label ); ?>"><?php echo esc_html( $status_text ); ?></span></td>
								<?php endforeach; ?>
							</tr>
						<?php endforeach; ?>
					</tbody>
				</table>
			</div>
			<div class="icp-section-action">
				<a class="icp-button icp-button-primary" href="<?php echo esc_url( $demo_url ); ?>">Book a Demo</a>
			</div>
		</div>
	</section>

	<section class="icp-pricing" id="icp-pricing" aria-labelledby="icp-pricing-title">
		<div class="icp-shell">
			<div class="icp-section-heading icp-center">
				<h2 id="icp-pricing-title">INFOFISCUS Conversa Plans &amp; Pricing</h2>
				<p>Choose the package that fits your analytics rollout.</p>
			</div>
			<div class="icp-pricing-grid">
				<?php foreach ( $pricing_plans as $plan ) : ?>
					<article class="icp-pricing-card<?php echo $plan['featured'] ? ' is-featured' : ''; ?>">
						<div class="icp-pricing-head">
							<h3><?php echo esc_html( $plan['name'] ); ?></h3>
							<p><strong><?php echo esc_html( $plan['price'] ); ?></strong><?php echo esc_html( $plan['period'] ); ?></p>
						</div>
						<ul>
							<?php foreach ( $plan['features'] as $feature ) : ?>
								<li><span class="icp-price-check">Yes</span><?php echo esc_html( $feature ); ?></li>
							<?php endforeach; ?>
						</ul>
						<a class="icp-button <?php echo $plan['featured'] ? 'icp-button-primary' : 'icp-button-secondary'; ?>" href="<?php echo esc_url( $demo_url ); ?>"><?php echo 'Enterprise' === $plan['name'] ? 'Talk To Sales' : 'Book a Demo'; ?></a>
					</article>
				<?php endforeach; ?>
			</div>
		</div>
	</section>

	<section class="icp-demo-form-section" id="icp-demo-form" aria-labelledby="icp-demo-form-title">
		<div class="icp-shell">
			<div class="icp-section-heading icp-center">
				<h2 id="icp-demo-form-title">Experience INFOFISCUS Conversa.</h2>
				<p><strong>Turn every business question into a confident decision.</strong></p>
				<p>Book a personalized demo and see governed conversational analytics working with your enterprise data.</p>
			</div>
			<div class="icp-demo-form-grid">
				<div class="icp-demo-visual">
					<div class="icp-demo-card">
						<span>See How We Can Work for You</span>
						<button class="icp-demo-schedule-trigger" type="button" data-icp-demo-trigger>Schedule Your Demo</button>
						<div class="icp-demo-calendar" data-icp-demo-calendar>
							<div class="icp-demo-calendar-head">
								<button class="icp-demo-calendar-nav" type="button" data-icp-calendar-prev aria-label="Previous month">&lt;</button>
								<strong data-icp-calendar-label>Choose a Date</strong>
								<button class="icp-demo-calendar-nav" type="button" data-icp-calendar-next aria-label="Next month">&gt;</button>
							</div>
							<div class="icp-demo-weekdays" aria-hidden="true">
								<i>Sun</i><i>Mon</i><i>Tue</i><i>Wed</i><i>Thu</i><i>Fri</i><i>Sat</i>
							</div>
							<div class="icp-demo-days" data-icp-calendar-days></div>
							<p class="icp-demo-selected-date" data-icp-selected-date aria-live="polite"></p>
						</div>
					</div>
				</div>
				<form class="icp-demo-form" id="icp-demo-request-form" action="<?php echo esc_url( $demo_url ); ?>" method="post">
					<input type="hidden" name="selected_demo_date" data-icp-demo-date value="">
					<label>Preferred Demo Date<input type="text" name="preferred_demo_date" data-icp-demo-date-display readonly></label>
					<div class="icp-form-row">
						<label>First Name <span>*</span><input type="text" name="first_name" autocomplete="given-name" required></label>
						<label>Last Name <span>*</span><input type="text" name="last_name" autocomplete="family-name" required></label>
					</div>
					<label>Company Email <span>*</span><input type="email" name="company_email" autocomplete="email" required></label>
					<label>Contact Number <span>*</span><input type="tel" name="contact_number" autocomplete="tel" required></label>
					<label>Company<input type="text" name="company" autocomplete="organization"></label>
					<button class="icp-button icp-button-primary" type="submit">Book a Demo</button>
				</form>
			</div>
		</div>
	</section>

	<section class="icp-customers" aria-labelledby="icp-customers-title">
		<div class="icp-shell">
			<div class="icp-section-heading icp-center">
				<h2 id="icp-customers-title">Infometry Trusted by 150+ Customers Worldwide</h2>
			</div>
			<div class="icp-logo-slider" aria-label="Customer logos">
				<div class="icp-logo-track">
					<?php for ( $i = 0; $i < 2; $i++ ) : ?>
						<?php foreach ( $customer_logos as $customer ) : ?>
							<span class="icp-logo-slide">
								<?php
								$customer_logo_path = INFOMETRY_PT_PATH . 'assets/images/' . $customer['file'];
								$customer_logo_ver  = is_readable( $customer_logo_path ) ? (string) filemtime( $customer_logo_path ) : INFOMETRY_PT_VERSION;
								?>
								<img src="<?php echo esc_url( INFOMETRY_PT_URL . 'assets/images/' . $customer['file'] . '?v=' . $customer_logo_ver ); ?>" alt="<?php echo esc_attr( $customer['name'] ); ?> logo">
							</span>
						<?php endforeach; ?>
					<?php endfor; ?>
				</div>
			</div>
		</div>
	</section>

	<section class="icp-faq" id="icp-faq" aria-labelledby="icp-faq-title">
		<div class="icp-shell">
			<div class="icp-section-heading icp-center">
				<h2 id="icp-faq-title">Frequently Asked Questions</h2>
			</div>
			<div class="icp-faq-list">
				<?php foreach ( $faqs as $index => $faq ) : ?>
					<details <?php echo 0 === $index ? 'open' : ''; ?>>
						<summary><?php echo esc_html( $faq['question'] ); ?></summary>
						<p><?php echo esc_html( $faq['answer'] ); ?></p>
					</details>
				<?php endforeach; ?>
			</div>
		</div>
	</section>

	<section class="icp-other-products" aria-labelledby="icp-other-products-title">
		<div class="icp-shell">
			<div class="icp-section-heading icp-center">
				<h2 id="icp-other-products-title">Other Products</h2>
			</div>
			<div class="icp-card-grid icp-other-grid">
				<?php foreach ( $other_products as $product ) : ?>
					<article class="icp-feature-card">
						<span class="icp-icon"><svg><use href="#icp-i-<?php echo esc_attr( $product['icon'] ); ?>"></use></svg></span>
						<h3><?php echo esc_html( $product['title'] ); ?></h3>
						<p><?php echo esc_html( $product['copy'] ); ?></p>
						<a class="icp-text-link" href="<?php echo esc_url( $contact_url ); ?>">Read More</a>
					</article>
				<?php endforeach; ?>
			</div>
		</div>
	</section>

	<section class="icp-final-cta" aria-labelledby="icp-final-title">
		<div class="icp-shell icp-final-panel">
			<span class="icp-rocket"><svg><use href="#icp-i-spark"></use></svg></span>
			<div>
				<h2 id="icp-final-title">Turn questions into better business outcomes.</h2>
				<p>Experience the power of conversational analytics.</p>
			</div>
			<a class="icp-button icp-button-primary" href="<?php echo esc_url( $demo_url ); ?>">Request a Live Demo</a>
			<a class="icp-button icp-button-secondary" href="<?php echo esc_url( $contact_url ); ?>">Talk to an Expert</a>
		</div>
	</section>

	<section class="icp-product-footer" id="icp-footer" aria-label="INFOFISCUS Conversa page footer">
		<div class="icp-shell icp-footer-grid">
			<div class="icp-footer-connect">
				<h3>Connect with us</h3>
				<img src="<?php echo esc_url( INFOMETRY_PT_URL . 'assets/images/infometry-logo-white.png' ); ?>" alt="Infometry Inc.">
				<p>Turning enterprise data into trusted insights, intelligent decisions and measurable business outcomes.</p>
				<div class="icp-social-row" aria-label="Infometry social links">
					<a class="icp-social icp-social-facebook" href="#" aria-label="Facebook">f</a>
					<a class="icp-social icp-social-x" href="#" aria-label="X">X</a>
					<a class="icp-social icp-social-linkedin" href="#" aria-label="LinkedIn">in</a>
					<a class="icp-social icp-social-youtube" href="#" aria-label="YouTube">▶</a>
					<a class="icp-social icp-social-pinterest" href="#" aria-label="Pinterest">P</a>
					<a class="icp-social icp-social-instagram" href="#" aria-label="Instagram">Ig</a>
					<a class="icp-social icp-social-g2" href="#" aria-label="G2">G2</a>
				</div>
				<a class="icp-footer-contact" href="<?php echo esc_url( $contact_url ); ?>">Contact Us <span>→</span></a>
			</div>
			<div class="icp-footer-links">
				<h3>Products</h3>
				<a href="#icp-hero-title">INFOFISCUS Conversa</a>
				<a href="#">Google (GCP) Connectors For Informatica IDMC</a>
				<a href="#">Global Connectors For Informatica IDMC</a>
				<a href="#">INFOFISCUS Snowflake Native Apps</a>
				<a href="#">Pre-Built Apps For IDMC and Matillion</a>
				<a href="#">Accelerators</a>
			</div>
			<div class="icp-footer-links">
				<h3>Resources</h3>
				<a href="#">Blog</a>
				<a href="#">Case Studies</a>
				<a href="#">Whitepapers</a>
				<a href="#">Gallery</a>
				<a href="#">Webinar</a>
				<a href="#">Press Releases</a>
			</div>
			<div class="icp-footer-links">
				<h3>Company</h3>
				<a href="#">Customers - Partners</a>
				<a href="#">Careers</a>
				<a href="mailto:Life@Infometry">Life@Infometry</a>
				<a href="#">Testimonials</a>
			</div>
		</div>
		<div class="icp-shell icp-footer-bottom">
			<p>© 2026 Infometry Inc. All Rights Reserved.</p>
			<p>Enabling AI for Every Enterprise</p>
		</div>
	</section>

	<section class="icp-product-footer-legacy" aria-hidden="true">
		<div class="icp-shell icp-footer-grid">
			<div><strong>Infometry.</strong><p>Infometry helps enterprises transform data into decisions with AI-powered analytics platforms.</p></div>
			<div><h3>Platform</h3><a href="#icp-capabilities">Overview</a><a href="#icp-capabilities">Capabilities</a><a href="#icp-workflow">Security</a></div>
			<div><h3>Solutions</h3><a href="#icp-use-cases">By Function</a><a href="#icp-use-cases">By Industry</a><a href="#icp-personas">Use Cases</a></div>
			<div><h3>Resources</h3><a href="#">Docs & Guides</a><a href="#">Blog</a><a href="#">Webinars</a></div>
			<div><h3>Stay updated</h3><p>Get the latest product updates and insights.</p><form><input type="email" placeholder="Enter your email" aria-label="Email address"><button type="button">→</button></form></div>
		</div>
	</section>
</main>

<?php
get_footer();
