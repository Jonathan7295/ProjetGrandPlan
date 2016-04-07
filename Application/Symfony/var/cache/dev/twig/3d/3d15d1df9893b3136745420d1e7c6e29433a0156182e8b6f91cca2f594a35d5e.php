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
        $__internal_3fb425f930fdc4bd7b542512de01f3acb25cfafec44473c547337f90df1cb2e0 = $this->env->getExtension("native_profiler");
        $__internal_3fb425f930fdc4bd7b542512de01f3acb25cfafec44473c547337f90df1cb2e0->enter($__internal_3fb425f930fdc4bd7b542512de01f3acb25cfafec44473c547337f90df1cb2e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_3fb425f930fdc4bd7b542512de01f3acb25cfafec44473c547337f90df1cb2e0->leave($__internal_3fb425f930fdc4bd7b542512de01f3acb25cfafec44473c547337f90df1cb2e0_prof);

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
