<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_e93a1315b771ca98244a019986bde6c6d7fcbc795a41f20a47454921afb7d450 extends Twig_Template
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
        $__internal_0a3329092b32a79eccc687757ce3f7d8bb6896741cdbecf09649be5e84f4f4d5 = $this->env->getExtension("native_profiler");
        $__internal_0a3329092b32a79eccc687757ce3f7d8bb6896741cdbecf09649be5e84f4f4d5->enter($__internal_0a3329092b32a79eccc687757ce3f7d8bb6896741cdbecf09649be5e84f4f4d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_0a3329092b32a79eccc687757ce3f7d8bb6896741cdbecf09649be5e84f4f4d5->leave($__internal_0a3329092b32a79eccc687757ce3f7d8bb6896741cdbecf09649be5e84f4f4d5_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php foreach ($form as $child) : ?>*/
/*     <?php echo $view['form']->row($child) ?>*/
/* <?php endforeach; ?>*/
/* */
