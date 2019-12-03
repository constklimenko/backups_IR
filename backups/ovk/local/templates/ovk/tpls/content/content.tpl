%system getOuterContent('./%template_resources%/tpls/content/header.tpl')%
<div class="container bottom-ser">
	<div class="block-width">
		%core navibar('navibar_main.tpl')%
		<div class="zag-container">%header%</div>
		<div class="inline-block content-site">
			%content%
		</div>
	</div>
</div>
%system getOuterContent('./%template_resources%/tpls/content/footer.tpl')%