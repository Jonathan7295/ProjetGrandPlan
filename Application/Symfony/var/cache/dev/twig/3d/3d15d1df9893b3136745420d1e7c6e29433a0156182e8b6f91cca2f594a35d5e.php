<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_31ecdae592293725275ac4e2f35d33f65574af3993ab130b798930263baa2f9d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a837933c6aeebd62ef4053961234a2574b9cf7da015609fec2166f171359a579 = $this->env->getExtension("native_profiler");
        $__internal_a837933c6aeebd62ef4053961234a2574b9cf7da015609fec2166f171359a579->enter($__internal_a837933c6aeebd62ef4053961234a2574b9cf7da015609fec2166f171359a579_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_a837933c6aeebd62ef4053961234a2574b9cf7da015609fec2166f171359a579->leave($__internal_a837933c6aeebd62ef4053961234a2574b9cf7da015609fec2166f171359a579_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php foreach ($form as $child): ?>*/
/*     <?php if (!$child->isRendered()): ?>*/
/*         <?php echo $view['form']->row($child) ?>*/
/*     <?php endif; ?>*/
/* <?php endforeach; ?>*/
/* */
