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
$product_url = home_url( '/product/conversational-analytics/' );

$capabilities = array(
	array( 'icon' => 'chat', 'title' => 'Natural Language to SQL', 'copy' => 'Turn plain English questions into optimized SQL on governed enterprise data.' ),
	array( 'icon' => 'brain', 'title' => 'Multi-Model AI Analytics', 'copy' => 'Use the right model path for exploration, explanation, prediction, and recommendations.' ),
	array( 'icon' => 'chart', 'title' => 'Advanced Analytics', 'copy' => 'Move from what happened to why it happened, what changes next, and what to do.' ),
	array( 'icon' => 'doc', 'title' => 'Document Intelligence', 'copy' => 'Analyze business files and unstructured context alongside warehouse data.' ),
	array( 'icon' => 'layer', 'title' => 'Trusted Semantic Layer', 'copy' => 'Keep metrics, definitions, and business rules consistent across every answer.' ),
	array( 'icon' => 'shield', 'title' => 'Security and Governance', 'copy' => 'Respect enterprise access controls, audit needs, and data governance standards.' ),
	array( 'icon' => 'desktop', 'title' => 'Native Desktop Experience', 'copy' => 'Give teams a focused analytics workspace for macOS and Windows.' ),
	array( 'icon' => 'speed', 'title' => 'Cost-Optimized Insights', 'copy' => 'Reduce repeated manual analysis while accelerating answer delivery.' ),
);

$workflow = array(
	array( 'step' => '01', 'title' => 'Ask', 'copy' => 'Business users ask questions in natural language.' ),
	array( 'step' => '02', 'title' => 'Understand', 'copy' => 'Conversa maps intent to governed metrics and domain context.' ),
	array( 'step' => '03', 'title' => 'Query', 'copy' => 'The engine generates optimized SQL on live enterprise data.' ),
	array( 'step' => '04', 'title' => 'Explain', 'copy' => 'Answers include charts, root cause signals, and business reasoning.' ),
	array( 'step' => '05', 'title' => 'Act', 'copy' => 'Teams move faster with recommendations and shareable insights.' ),
);

$use_cases = array(
	array( 'title' => 'Finance and FP&A', 'copy' => 'Variance analysis, margin questions, forecast drivers, and cash visibility.' ),
	array( 'title' => 'Sales', 'copy' => 'Pipeline health, revenue movement, account trends, and quota risk.' ),
	array( 'title' => 'Operations', 'copy' => 'Supply bottlenecks, process performance, quality patterns, and service levels.' ),
	array( 'title' => 'Marketing', 'copy' => 'Campaign ROI, funnel conversion, customer segments, and spend effectiveness.' ),
	array( 'title' => 'HR', 'copy' => 'Workforce trends, retention signals, productivity metrics, and planning insight.' ),
);

$personas = array(
	array( 'title' => 'CIOs and CDOs', 'copy' => 'Scale self-service analytics without losing governance.' ),
	array( 'title' => 'Analytics Leaders', 'copy' => 'Reduce report queues and focus teams on higher-value analysis.' ),
	array( 'title' => 'Business Leaders', 'copy' => 'Get answers without waiting for dashboards or SQL requests.' ),
	array( 'title' => 'Data Teams', 'copy' => 'Centralize trusted definitions and make data easier to consume.' ),
	array( 'title' => 'Executives', 'copy' => 'Review board-ready insights with context, confidence, and speed.' ),
);

$faqs = array(
	array( 'q' => 'Can business users ask questions without SQL?', 'a' => 'Yes. Conversa is designed for natural language analytics, so teams can ask business questions directly while the platform handles governed query generation.' ),
	array( 'q' => 'Does Conversa work with live enterprise data?', 'a' => 'Yes. The product is positioned for live data warehouses and governed enterprise data sources, so answers stay tied to current business information.' ),
	array( 'q' => 'How does it keep answers trusted?', 'a' => 'A semantic layer keeps metric definitions, business rules, and domain language consistent before answers are generated.' ),
	array( 'q' => 'Who should use Conversa?', 'a' => 'It fits executives, business leaders, analytics teams, CIOs, CDOs, and data teams that want faster insight delivery without loosening governance.' ),
);
?>

<main class="infometry-conversa-product" id="infometry-conversa-product">
	<svg class="icp-icon-sprite" aria-hidden="true" focusable="false">
		<symbol id="icp-i-chat" viewBox="0 0 24 24"><path d="M5 4h14a3 3 0 0 1 3 3v7a3 3 0 0 1-3 3h-7l-5 4v-4H5a3 3 0 0 1-3-3V7a3 3 0 0 1 3-3Z"/><path d="M8 10.5h.01M12 10.5h.01M16 10.5h.01"/></symbol>
		<symbol id="icp-i-brain" viewBox="0 0 24 24"><path d="M9 3a4 4 0 0 0-4 4v1a4 4 0 0 0 0 8v1a4 4 0 0 0 7 2.6A4 4 0 0 0 19 17v-1a4 4 0 0 0 0-8V7a4 4 0 0 0-7-2.6A4 4 0 0 0 9 3Z"/><path d="M12 4v16M7 8h3M7 15h3M14 9h3M14 14h3"/></symbol>
		<symbol id="icp-i-chart" viewBox="0 0 24 24"><path d="M4 19V5M4 19h16"/><path d="m7 15 4-4 3 3 5-7"/><path d="M18 7h1v5"/></symbol>
		<symbol id="icp-i-doc" viewBox="0 0 24 24"><path d="M6 3h9l3 3v15H6V3Z"/><path d="M14 3v4h4M9 11h6M9 15h6M9 19h4"/></symbol>
		<symbol id="icp-i-layer" viewBox="0 0 24 24"><path d="m12 3 9 5-9 5-9-5 9-5Z"/><path d="m3 12 9 5 9-5M3 16l9 5 9-5"/></symbol>
		<symbol id="icp-i-shield" viewBox="0 0 24 24"><path d="M12 2 4 5v6c0 5 3 9 8 11 5-2 8-6 8-11V5l-8-3Z"/><path d="m8 12 3 3 5-6"/></symbol>
		<symbol id="icp-i-desktop" viewBox="0 0 24 24"><rect x="3" y="4" width="18" height="13" rx="2"/><path d="M8 21h8M12 17v4"/></symbol>
		<symbol id="icp-i-speed" viewBox="0 0 24 24"><path d="M4 14a8 8 0 1 1 16 0"/><path d="m12 14 5-5"/><path d="M7 18h10"/></symbol>
	</svg>

	<section class="icp-hero" aria-labelledby="icp-hero-title">
		<div class="icp-shell icp-hero-grid">
			<div class="icp-hero-copy">
				<img class="icp-product-logo" src="<?php echo esc_url( INFOMETRY_PT_URL . 'assets/images/infofiscus-conversa-logo.png' ); ?>" alt="INFOFISCUS Conversa">
				<p class="icp-eyebrow">Conversational analytics platform</p>
				<h1 id="icp-hero-title">INFOFISCUS Conversa turns business questions into trusted enterprise insights.</h1>
				<p class="icp-hero-text">Ask questions in plain English, analyze live data, and get AI-powered answers with charts, root-cause context, and recommendations without waiting on SQL or predefined reports.</p>
				<div class="icp-actions">
					<a class="icp-button icp-button-primary" href="<?php echo esc_url( $demo_url ); ?>">Book a Demo</a>
					<a class="icp-button icp-button-secondary" href="#icp-capabilities">Explore Capabilities</a>
				</div>
				<div class="icp-proof" aria-label="Product outcomes">
					<span><strong>Plain English</strong> analytics for business teams</span>
					<span><strong>Governed SQL</strong> on trusted enterprise data</span>
					<span><strong>AI answers</strong> with charts and recommendations</span>
				</div>
			</div>
			<div class="icp-hero-visual" aria-label="INFOFISCUS Conversa product interface">
				<div class="icp-browser-bar"><span></span><span></span><span></span><b>Conversa Workspace</b></div>
				<img src="<?php echo esc_url( INFOMETRY_PT_URL . 'assets/images/conversa-home-1.png' ); ?>" alt="INFOFISCUS Conversa dashboard showing analytics workspace">
			</div>
		</div>
	</section>

	<section class="icp-assurance" aria-label="Enterprise delivery strengths">
		<div class="icp-shell icp-assurance-grid">
			<article>
				<span class="icp-icon"><svg><use href="#icp-i-chart"></use></svg></span>
				<h2>Proven Methodology</h2>
				<p>Outcome-driven delivery for measurable analytics impact.</p>
			</article>
			<article>
				<span class="icp-icon"><svg><use href="#icp-i-shield"></use></svg></span>
				<h2>Enterprise Security</h2>
				<p>Built with governance, privacy, and compliance in mind.</p>
			</article>
			<article>
				<span class="icp-icon"><svg><use href="#icp-i-layer"></use></svg></span>
				<h2>Scalable Architecture</h2>
				<p>Cloud-native, secure, and ready for future growth.</p>
			</article>
			<article>
				<span class="icp-icon"><svg><use href="#icp-i-chat"></use></svg></span>
				<h2>Customer Success</h2>
				<p>Long-term partnerships that turn insight into adoption.</p>
			</article>
		</div>
	</section>

	<section class="icp-problem" aria-labelledby="icp-problem-title">
		<div class="icp-shell">
			<div class="icp-section-heading">
				<p class="icp-kicker">The enterprise analytics gap</p>
				<h2 id="icp-problem-title">Most business questions still wait too long for an answer.</h2>
				<p>Conversa is built for teams that need deeper insight than static dashboards and faster answers than analyst queues can provide.</p>
			</div>
			<div class="icp-problem-grid">
				<article><span>01</span><h3>Technical tools slow access</h3><p>Business users often need SQL, BI expertise, or analyst support before they can explore data.</p></article>
				<article><span>02</span><h3>Reports stop at the surface</h3><p>Predefined dashboards show what happened but rarely explain the root cause behind it.</p></article>
				<article><span>03</span><h3>Recommendations are missing</h3><p>Teams need next-best actions, not just exported tables and disconnected visuals.</p></article>
				<article><span>04</span><h3>Decision cycles get delayed</h3><p>Leaders wait for new reports while opportunities, risks, and operational issues move on.</p></article>
			</div>
		</div>
	</section>

	<section class="icp-capabilities" id="icp-capabilities" aria-labelledby="icp-capabilities-title">
		<div class="icp-shell">
			<div class="icp-section-heading">
				<p class="icp-kicker">Core capabilities</p>
				<h2 id="icp-capabilities-title">AI analytics with governed enterprise context.</h2>
				<p>Every feature is designed to make complex data questions easier to ask, trust, explain, and act on.</p>
			</div>
			<div class="icp-capability-grid">
				<?php foreach ( $capabilities as $capability ) : ?>
					<article class="icp-capability-card">
						<span class="icp-icon"><svg><use href="#icp-i-<?php echo esc_attr( $capability['icon'] ); ?>"></use></svg></span>
						<h3><?php echo esc_html( $capability['title'] ); ?></h3>
						<p><?php echo esc_html( $capability['copy'] ); ?></p>
					</article>
				<?php endforeach; ?>
			</div>
		</div>
	</section>

	<section class="icp-showcase" aria-labelledby="icp-showcase-title">
		<div class="icp-shell">
			<div class="icp-showcase-grid">
				<div class="icp-showcase-copy">
					<p class="icp-kicker">Product workspace</p>
					<h2 id="icp-showcase-title">Explore, connect, and explain insights in one focused experience.</h2>
					<p>Conversa gives users a direct path from natural language questions to governed data answers, reusable storybooks, and enterprise data connections.</p>
					<div class="icp-shot-tabs" role="tablist" aria-label="Conversa screenshots">
						<button class="is-active" type="button" data-icp-shot="home">Home</button>
						<button type="button" data-icp-shot="storybooks">Storybooks</button>
						<button type="button" data-icp-shot="connections">Connections</button>
					</div>
				</div>
				<div class="icp-shot-frame">
					<img class="is-active" data-icp-shot-panel="home" src="<?php echo esc_url( INFOMETRY_PT_URL . 'assets/images/conversa-home-1.png' ); ?>" alt="Conversa home dashboard">
					<img data-icp-shot-panel="storybooks" src="<?php echo esc_url( INFOMETRY_PT_URL . 'assets/images/conversa-storybooks-1.png' ); ?>" alt="Conversa storybooks screen">
					<img data-icp-shot-panel="connections" src="<?php echo esc_url( INFOMETRY_PT_URL . 'assets/images/conversa-connections-1.png' ); ?>" alt="Conversa connections screen">
				</div>
			</div>
		</div>
	</section>

	<section class="icp-workflow" aria-labelledby="icp-workflow-title">
		<div class="icp-shell">
			<div class="icp-section-heading">
				<p class="icp-kicker">How it works</p>
				<h2 id="icp-workflow-title">From question to action in five steps.</h2>
			</div>
			<div class="icp-workflow-list">
				<?php foreach ( $workflow as $step ) : ?>
					<article>
						<span><?php echo esc_html( $step['step'] ); ?></span>
						<h3><?php echo esc_html( $step['title'] ); ?></h3>
						<p><?php echo esc_html( $step['copy'] ); ?></p>
					</article>
				<?php endforeach; ?>
			</div>
		</div>
	</section>

	<section class="icp-outcomes" aria-labelledby="icp-outcomes-title">
		<div class="icp-shell icp-outcomes-panel">
			<div>
				<p class="icp-kicker">Enterprise outcomes</p>
				<h2 id="icp-outcomes-title">Built to reduce the analytics bottleneck.</h2>
				<p>Give every decision-maker a governed way to move from question to insight while data teams retain control over definitions, access, and quality.</p>
			</div>
			<div class="icp-outcome-grid">
				<article><strong>Faster</strong><span>time-to-insight</span></article>
				<article><strong>Lower</strong><span>analyst workload</span></article>
				<article><strong>Better</strong><span>decision velocity</span></article>
				<article><strong>Stronger</strong><span>governance posture</span></article>
			</div>
		</div>
	</section>

	<section class="icp-use-cases" aria-labelledby="icp-use-cases-title">
		<div class="icp-shell">
			<div class="icp-section-heading">
				<p class="icp-kicker">Use cases</p>
				<h2 id="icp-use-cases-title">Useful across the teams asking the hardest questions.</h2>
			</div>
			<div class="icp-use-case-grid">
				<?php foreach ( $use_cases as $use_case ) : ?>
					<article>
						<h3><?php echo esc_html( $use_case['title'] ); ?></h3>
						<p><?php echo esc_html( $use_case['copy'] ); ?></p>
					</article>
				<?php endforeach; ?>
			</div>
		</div>
	</section>

	<section class="icp-personas" aria-labelledby="icp-personas-title">
		<div class="icp-shell icp-personas-panel">
			<div class="icp-section-heading">
				<p class="icp-kicker">Who should use it</p>
				<h2 id="icp-personas-title">Designed for leaders, operators, and data teams.</h2>
			</div>
			<div class="icp-persona-grid">
				<?php foreach ( $personas as $persona ) : ?>
					<article>
						<h3><?php echo esc_html( $persona['title'] ); ?></h3>
						<p><?php echo esc_html( $persona['copy'] ); ?></p>
					</article>
				<?php endforeach; ?>
			</div>
		</div>
	</section>

	<section class="icp-faq" aria-labelledby="icp-faq-title">
		<div class="icp-shell icp-faq-grid">
			<div>
				<p class="icp-kicker">FAQ</p>
				<h2 id="icp-faq-title">Questions teams ask before adopting Conversa.</h2>
				<p>Need a deeper technical walkthrough? Infometry can map Conversa against your data stack, governance model, and reporting workflow.</p>
				<a class="icp-button icp-button-secondary" href="<?php echo esc_url( $contact_url ); ?>">Talk to an Expert</a>
			</div>
			<div class="icp-faq-list">
				<?php foreach ( $faqs as $faq ) : ?>
					<details>
						<summary><?php echo esc_html( $faq['q'] ); ?></summary>
						<p><?php echo esc_html( $faq['a'] ); ?></p>
					</details>
				<?php endforeach; ?>
			</div>
		</div>
	</section>

	<section class="icp-final-cta" aria-labelledby="icp-final-title">
		<div class="icp-shell icp-final-panel">
			<img src="<?php echo esc_url( INFOMETRY_PT_URL . 'assets/images/infofiscus-conversa-mark.png' ); ?>" alt="" aria-hidden="true">
			<div>
				<p class="icp-kicker">Ready for conversational analytics?</p>
				<h2 id="icp-final-title">See how INFOFISCUS Conversa can answer your enterprise questions faster.</h2>
			</div>
			<div class="icp-final-actions">
				<a class="icp-button icp-button-primary" href="<?php echo esc_url( $demo_url ); ?>">Book a Walkthrough</a>
				<a class="icp-text-link" href="<?php echo esc_url( $product_url ); ?>">View current product page</a>
			</div>
		</div>
	</section>
</main>

<?php
get_footer();
