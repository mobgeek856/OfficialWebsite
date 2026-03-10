import Link from "next/link";

export const metadata = {
  title: "Terms of Service - PUMPKIN TECHNOLOGY",
  description: "Terms of Service for PUMPKIN TECHNOLOGY website and services.",
};

export default function TermsPage() {
  return (
    <div className="container-custom section-padding">
      <Link href="/" className="mb-8 inline-block text-primary hover:underline">
        ← Back to Home
      </Link>
      <h1 className="mb-6 text-3xl font-bold">Terms of Service</h1>
      <p className="text-white/80">
        This is a placeholder for the Terms of Service. By using this website you agree to our terms and conditions.
      </p>
    </div>
  );
}
