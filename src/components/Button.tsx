
export function Button({children, href, variant, size, wide, className}: ButtonProps) {
    const variants = {
        primary: 'bg-primary hover:bg-primary-light text-neutral-50',
        secondary: 'bg-neutral-200 hover:bg-neutral-100 text-primary',
    } as Record<string, string>;

    const sizes = {
        sm: 'px-4 py-2',
        md: 'px-8 py-3',
        lg: 'px-12 py-4',
    } as Record<string, string>;

    const classes = [
        variants[variant || 'primary'],
        sizes[size || 'md'],
        className,
    ].join(' ');

    return (
        <a
            href={href}
            className={`${classes} rounded-lg ${wide ? 'flex' : 'inline-flex'} items-center gap-2 transition-colors`}
        >
            {children}
        </a>
    );
}

interface ButtonProps {
    children: React.ReactNode;
    href?: string;
    variant?: string;
    size?: string;
    wide?: boolean;
    className?: string;
}
