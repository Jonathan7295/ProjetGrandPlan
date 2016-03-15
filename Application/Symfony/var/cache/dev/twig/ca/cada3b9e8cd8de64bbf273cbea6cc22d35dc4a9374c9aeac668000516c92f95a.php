<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_d95936679f91b4edda090ed584d54ff0dd902975cebedf23e691ec830907f40b extends Twig_Template
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
        $__internal_7d7047b9cc667ea2d969b418aec62ed2d2a09606852b162035872c7af5698ce1 = $this->env->getExtension("native_profiler");
        $__internal_7d7047b9cc667ea2d969b418aec62ed2d2a09606852b162035872c7af5698ce1->enter($__internal_7d7047b9cc667ea2d969b418aec62ed2d2a09606852b162035872c7af5698ce1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_7d7047b9cc667ea2d969b418aec62ed2d2a09606852b162035872c7af5698ce1->leave($__internal_7d7047b9cc667ea2d969b418aec62ed2d2a09606852b162035872c7af5698ce1_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (!isset($render_rest) || $render_rest): ?>*/
/* <?php echo $view['form']->rest($form) ?>*/
/* <?php endif ?>*/
/* </form>*/
/* */
