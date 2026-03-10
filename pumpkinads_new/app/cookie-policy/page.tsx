import Link from "next/link";

export const metadata = {
  title: "Cookie Policy - PUMPKIN TECHNOLOGY",
  description: "How PUMPKIN TECHNOLOGY uses cookies and similar technologies.",
};

export default function CookiePolicyPage() {
  return (
    <div className="container-custom section-padding">
      <Link href="/" className="mb-8 inline-block text-primary hover:underline">
        ← Back to Home
      </Link>
      <h1 className="mb-6 text-3xl font-bold">Cookie Policy</h1>
      <p className="text-white/80">
        This is a placeholder for the Cookie Policy. We use cookies to improve your experience on our website.
      </p>
    </div>
  );
}
