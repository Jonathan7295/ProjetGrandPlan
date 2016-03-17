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
        $__internal_15bc7acd3857f2cb1ed6c65ef09e08c838aadf2e9dd0a986aa764afa0c56bdb2 = $this->env->getExtension("native_profiler");
        $__internal_15bc7acd3857f2cb1ed6c65ef09e08c838aadf2e9dd0a986aa764afa0c56bdb2->enter($__internal_15bc7acd3857f2cb1ed6c65ef09e08c838aadf2e9dd0a986aa764afa0c56bdb2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_15bc7acd3857f2cb1ed6c65ef09e08c838aadf2e9dd0a986aa764afa0c56bdb2->leave($__internal_15bc7acd3857f2cb1ed6c65ef09e08c838aadf2e9dd0a986aa764afa0c56bdb2_prof);

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
