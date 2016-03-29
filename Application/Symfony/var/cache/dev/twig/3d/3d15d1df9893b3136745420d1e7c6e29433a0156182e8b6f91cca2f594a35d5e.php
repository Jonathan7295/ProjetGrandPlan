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
        $__internal_32a37b3392d8da7bbb290ee0d7653e74581dc979e426de69df1e3578f318f0cc = $this->env->getExtension("native_profiler");
        $__internal_32a37b3392d8da7bbb290ee0d7653e74581dc979e426de69df1e3578f318f0cc->enter($__internal_32a37b3392d8da7bbb290ee0d7653e74581dc979e426de69df1e3578f318f0cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_32a37b3392d8da7bbb290ee0d7653e74581dc979e426de69df1e3578f318f0cc->leave($__internal_32a37b3392d8da7bbb290ee0d7653e74581dc979e426de69df1e3578f318f0cc_prof);

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
